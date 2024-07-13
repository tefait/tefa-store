<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm()
    {
        if (auth()->guard('customer')->check()) {
            return redirect(route('customer.dashboard'));
        }

        return view('ecommerce.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email',
            'password' => 'required|string',
        ]);

        // Check if the customer with the given email and status exists
        $customer = \App\Models\Customer::where('email', $request->email)
            ->where('status', 1)
            ->first();

        if (!$customer) {
            return redirect()->back()->with(['kesalahan' => 'Akun Anda tidak aktif atau tidak ada di kredensial kami.']);
        }

        // Attempt to log in
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('customer.dashboard'));
        }

        return redirect()->back()->with(['kesalahan' => 'Email atau password tidak tersedia di kredensial kami.']);
    }


    public function dashboard()
    {
        $orders = Order::selectRaw('COALESCE(sum(CASE WHEN status = 0 THEN subtotal END), 0) as pending,
        COALESCE(count(CASE WHEN status = 3 THEN subtotal END), 0) as shipping,
        COALESCE(count(CASE WHEN status = 4 THEN subtotal END), 0) as completeOrder')
            ->where('customer_id', auth()->guard('customer')->user()->id)->get();

        return view('ecommerce.dashboard', compact('orders'));
    }

    public function logout()
    {
        auth()->guard('customer')->logout();

        return redirect(route('customer.login'));
    }
}
