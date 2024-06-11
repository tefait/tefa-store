<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\CustomerRegisterMail;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $provinces = \App\Models\Province::orderBy('created_at', 'DESC')->get();

        return view('ecommerce.register', ['provinces' => $provinces]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'customer_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'customer_phone' => 'required',
            'email' => 'required|email',
            'customer_address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'city_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id',
        ]);

        DB::beginTransaction();
        try {
            $password = $request->input('password');
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'password' => $password,
                'phone_number' => $request->customer_phone,
                'address' => $request->customer_address,
                'district_id' => $request->district_id,
                'activate_token' => Str::random(30),
                'status' => false,
            ]);

            DB::commit();
            Mail::to($request->email)->send(new CustomerRegisterMail($customer, $password));

            return redirect(route('customer.post_login'));
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
