<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PesananController extends Controller
{
    /**
     * Menampilkan list dari seluruh order yang dipunyai user, atau seluruh user.
     */
    public function index()
    {
        // Inisiasi variable baru diluar scope if
        $orders = [];

        // Cek apakah user Admin atau bukan
        if (Auth::user()->is_admin) {
            // Berikan semua order yang telah di pesan semua user
            $orders = Pesanan::all();
        } else {
            // Berikan order yang hanya dia miliki
            $orders = Pesanan::where('user_id', Auth::user()->id)->get();
        }

        // Tampilkan view index order dengan data yang sudah di ambil
        return view('development.order.index', compact('orders'));
    }

    /**
     * Digunakan untuk checkout barang ketika user sudah selesai menyusun cart (store to order table)
     */
    public function checkout()
    {
        // Dapatkan id user
        $user_id = Auth::id();
        // Dapatkan semua produk di keranjang yang dimilikinya
        $carts = Cart::where('user_id', $user_id)->get();
        // Bila tidak ada cart kembalikan ke halaman sebeumnya
        if ($carts == null) {
            return Redirect::back();
        }

        // Buat 1 order baru untuk 1 user
        $order = Pesanan::create([
            'user_id' => $user_id,
        ]);

        // Ulang semua keranjang yang dipunya user
        foreach ($carts as $cart) {
            // Cari nama product
            $product = Produk::find($cart->product_id);
            // Kurangin stock product
            $product->update([
                'stock' => $product->stock - $cart->amount,
            ]);
            // Buat transaksi baru
            Transaksi::create([
                'amount' => $cart->amount,
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
            ]);
            // Hapus keranjang nya
            $cart->delete();
        }

        // Kembali ke halaman sebelumnya (cart)
        return Redirect::back();
    }

    /**
     * Menampilkan halaman suatu order. Berdasarkan params $order yang diberikan
     */
    public function show(Pesanan $order)
    {
        return view('development.order.show', compact('order'));
    }

    /**
     * Digunakan untuk menyimpan bukti pembayaran milik user
     */
    public function store_receipt(Pesanan $order, Request $request)
    {
        // Validasi apakah user sudah mengirimi file?
        $request->validate([
            'payment_receipt' => 'required|image',
        ]);

        // Simpan file yang diberikan user kedalam variable
        $file = $request->file('payment_receipt');
        // Buat nama file unik berdasarkan timestamps
        $filename = time().'_'.$order->id.'.'.$file->getClientOriginalExtension();
        // Simpan file ke disk drive
        Storage::disk('local')->put('public/'.$filename, $file->getContent());
        // update order yang ada dengan menambahkan nama file receipt yang baru
        $order->update([
            'receipt' => $filename,
        ]);

        return Redirect::back();
    }

    /**
     * Fungsi yang digunakan untuk mengubah status order
     *
     * Digunakan untuk mengubah status order menjadi paid (sudah dibayar)
     *
     * @return Redirect
     */
    public function confirm_payment(Pesanan $order)
    {
        $order->update([
            'status' => 'paid',
        ]);

        return Redirect::back();
    }

    /**
     * Fungsi yang digunakan untuk mengubah status order
     *
     * Digunakan untuk mengubah status order menjadi ditolak (rejected)
     *
     * @return Redirect
     */
    public function reject_payment(Pesanan $order)
    {
        $order->status = 'rejected';
        $order->receipt = null;
        $order->updateOrFail();

        return Redirect::back();
    }

    /**
     * Mencetak nota
     *
     * Fungsi ini digunakan untuk mencetak nota pembayaran dari produk yang telah dibayar
     *
     * @return View order.nota
     */
    public function nota(Pesanan $order)
    {
        return view('development.order.nota', compact('order'));
    }
}
