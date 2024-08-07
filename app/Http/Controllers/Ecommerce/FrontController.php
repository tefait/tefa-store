<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function referalProduct($user, $product)
    {
        $code = $user . '-' . $product;
        $product = Product::find($product);
        $cookie = cookie('afiliasi', json_encode($code), 2880);

        return redirect(route('front.show_product', $product->slug))->cookie($cookie);
    }

    public function listCommission()
    {
        $user = auth()->guard('customer')->user();

        $orders = Order::where('ref', $user->id)->where('status', 4)->paginate(10);

        return view('ecommerce.affiliate', compact('orders'));
    }

    public function index()
    {
        $newest = Product::orderBy('created_at', 'DESC')->limit(4)->get();
        $top_sales = Product::withCount('orders')->orderBy('orders_count', 'desc')->limit(6)->get();
        $testimoni = Comment::where('terpilih', true)->limit(3)->get();

        $count['product'] = Product::count();
        $count['order'] = Order::count();

        return view('home', compact('testimoni', 'newest', 'top_sales', 'count'));
    }

    public function product()
    {
        $query = Product::with(['category', 'images', 'orders'])->orderBy('created_at', 'DESC');

        if ($search = request()->q) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('price', 'LIKE', '%' . $search . '%')
                    ->orWhere('slug', 'LIKE', '%' . $search . '%');
            });
        }

        if ($sort = request()->sort) {
            switch ($sort) {
                case 'newest':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'order-asc':
                    $query->orderBy('orders_count', 'asc');
                    break;
                case 'price-lowest':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price-highest':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name-asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name-desc':
                    $query->orderBy('name', 'desc');
                    break;
                default:
                    break;
            }
        }
        if (request()->page === 'all') {
            $products = $query->get();
        } else {
            $products = $query->paginate(15);
        }

        return view('master.toko.index_toko', compact('products'));
    }

    public function categoryProduct($slug)
    {

        $products = Category::where('slug', $slug)->first()->product()->orderBy('created_at', 'DESC')->paginate(12);

        return view('master.toko.index_toko', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::with(['category', 'comments', 'images', 'orders'])
            ->where('slug', $slug)
            ->orWhere('id', $slug)
            ->first();

        $products = Product::with(['category', 'images', 'orders'])
            ->where('slug', '!=', $slug)
            ->orderBy(fake()->randomElement(['name', 'price', 'slug', 'id', 'description']), fake()->randomElement(['asc', 'desc']))
            ->limit(6)
            ->get();

        return view('master.toko.detail_produk', compact('product', 'products'));
    }



    public function verifyCustomerRegistration($token)
    {
        $customer = Customer::where('activate_token', $token)->first();
        if ($customer) {
            $customer->update([
                'activate_token' => null,
                'status' => 1,
            ]);

            return redirect(route('customer.login'))->with(['success' => 'Verifikasi Berhasil, Silahkan Login']);
        }

        return redirect(route('customer.login'))->with(['error' => 'Invalid Verifikasi Token']);
    }

    public function customerSettingForm()
    {
        /** @var \App\Models\Customer $customer */
        $customer = Auth::guard('customer')->user()->load('rel_address');
        $provinces = Province::orderBy('name', 'ASC')->get();

        return view('pengguna.pengaturan.profil_pengguna', compact('customer', 'provinces'));
    }

}
