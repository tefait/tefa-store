<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Menampilkan seluruh produk yang sudah dimasukkan ke keranjang milik 1 user
     */
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->get();

        return view('development.cart.index', ['carts' => $carts]);
    }

    /**
     * Menambahkan produk ke cart
     */
    public function addToCart(Produk $produk, Request $request)
    {
        // Tampung id user dan id product
        $user_id = Auth::id();
        $produk_id = $produk->id;

        /*
        Cari cart dengan id product yang sudah di kirimkan dan
         cek apakah cart tersebut sudah ada
         bila belum maka validasi terlebih dahulu jumlahnya
         */
        $existing_cart = Cart::where('product_id', $produk_id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_cart === null) {
            $request->validate([
                'amount' => 'required|gte:1|lte:'.$produk->stock,
            ]);

            // Buat cart baru dengan id user dan id product yang beserta amount yang sudah disesuaikan
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $produk_id,
                'amount' => $request->amount,
            ]);
        } else {
            // Validasi amount dan pastikan tidak lebih dari stok
            $request->validate([
                'amount' => 'required|gte:1|lte:'.($produk->stock -
                    $existing_cart->amount),
            ]);
            // ubah amount cart yang sudah ada
            $existing_cart->update([
                'amount' => $existing_cart->amount + $request->amount,
            ]);
        }

        // Redirect user ke halaman cart
        return Redirect::route('cart.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_cart(Cart $cart, Request $request)
    {
        $request->validate([
            'amount' => 'required|gte:1|lte:'.$cart->product->stock,
        ]);
        $cart->update([
            'amount' => $request->amount,
        ]);

        return Redirect::route('cart.index');
    }

    /**
     * Menghapus keranjang user berdsarkan permintaan yang sudah dikirimkan
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();

        // Arahkan user kembali ke halaman sebelumnya
        return Redirect::back()->with(['success' => 'Produk berhasil dihapus dari keranjang']);
    }
}
