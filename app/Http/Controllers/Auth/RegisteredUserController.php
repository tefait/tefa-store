<?php

namespace App\Http\Controllers\Auth;
use Laravel\Socialite;
use App\Http\Controllers\Controller;
use App\Mail\CustomerRegisterMail;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
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
        $provinces = \App\Models\Province::get();

        return view('ecommerce.register2', ['provinces' => $provinces]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'customer_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:customers,email'],
            'password' => ['required', Rules\Password::defaults(), 'same:konfirmasi-password'],
            'konfirmasi-password' => ['required'],
            'customer_phone' => 'required',
            'customer_address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'regency_id' => 'required|exists:regencies,id',
            'district_id' => 'required|exists:districts,id',
            'village_id' => 'required|exists:villages,id',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        DB::beginTransaction();
        try {
            $password = $request->input('password');
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'password' => $password,
                'phone_number' => $request->customer_phone,
                'activate_token' => Str::random(30),
                'status' => true,
            ]);
            CustomerAddress::create([
                'customer_id' => $customer->id,
                'address' => $request->customer_address,
                'village_id' => $request->village_id,
            ]);
            DB::commit();
            Mail::to($request->email)->send(new CustomerRegisterMail($customer, $password));

            return response()->json(['message' => 'Registration successful'], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
