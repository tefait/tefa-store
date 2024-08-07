<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Mail\CustomerRegisterMail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function getCourier(Request $request)
    {
        $this->validate($request, [
            'destination' => 'required',
            'weight' => 'required|integer',
        ]);

        $url = 'https://api.rajaongkir.com/starter/cost';
        $client = new Client();
        $response = $client->request('POST', $url, [
            'headers' => [
                'key' => config('app.rajaongkir_api_key'),
            ],
            'form_params' => [
                'origin' => 22,
                'destination' => $request->destination,
                'weight' => $request->weight,
                'courier' => 'jne',
            ],
        ]);
        $body = json_decode($response->getBody(), true);

        return $body;
    }

    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer',
        ]);

        // Check if the user is authenticated and is a customer
        if (auth()->guard('customer')->check()) {
            $user = auth()->guard('customer')->user();

            // Fetch the product
            $product = Product::findOrFail($request->product_id);

            // Save or update the cart model
            $cart = Cart::updateOrCreate(
                ['customer_id' => $user->id, 'product_id' => $request->product_id],
                [
                    'product_name' => $product->name,
                    'product_price' => $product->price,
                    'product_image' => $product->image,
                    'weight' => $product->weight,
                    'qty' => DB::raw("qty + {$request->qty}"), // Incrementing qty by the specified value
                ]
            );

            // Redirect with success message
            return redirect()->back()->with(['success' => 'Produk Ditambahkan ke Keranjang']);
        }

        // If the user is not authenticated as a customer, proceed with cookie-based cart
        $carts = $this->getCarts();
        if ($carts && array_key_exists($request->product_id, $carts)) {
            $carts[$request->product_id]['qty'] += $request->qty;
        } else {
            $product = Product::find($request->product_id);
            $carts[$request->product_id] = [
                'qty' => $request->qty,
                'product_id' => $product->id,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_image' => $product->image,
                'weight' => $product->weight,
            ];
        }
        $cookie = cookie('carts', json_encode($carts), 2880);

        return redirect()->back()->with(['success' => 'Produk Ditambahkan ke Keranjang'])->cookie($cookie);
    }

    public function listCart()
    {
        $carts = $this->getCarts();
        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['product_price'];
        });

        return view('ecommerce.cart', compact('carts', 'subtotal'));
    }

    public function destroyCart(Request $request)
    {
        $carts = $this->getCarts();
        $filteredCarts = array_filter($carts, function ($cart) use ($request) {
            return $cart['product_id'] !== $request->id;
        });
        if (auth('customer')->check()) {
            Cart::where("product_id", $request->id)->delete();
        }

        Cookie::queue('carts', json_encode($filteredCarts), 60);
        return response()->json(['status' => 200, 'message' => 'success']);
    }

    public function AJAXlistCart()
    {
        $carts = $this->getCarts();
        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['product_price'];
        });

        return response()->json([
            'success' => true,
            'carts' => $carts,
            'subtotal' => $subtotal,
        ]);
    }

    public function updateCart(Request $request)
    {
        $carts = $this->getCarts();
        foreach ($request->product_id as $key => $row) {
            if ($request->qty[$key] == 0) {
                unset($carts[$row]);
            } else {
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        $cookie = cookie('carts', json_encode($carts), 2880);

        return redirect()->back()->cookie($cookie);
    }

    public static function getCarts()
    {
        $carts = json_decode(request()->cookie('carts'), true);
        if (auth()->guard('customer')->check()) {
            $carts = Cart::where('customer_id', auth()->guard('customer')->id())->get();
            $carts = $carts->toArray();
        }
        $carts = $carts != '' ? $carts : [];

        return $carts;
    }

    public function checkout()
    {
        $carts = $this->getCarts();
        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['product_price'];
        });
        $weight = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['weight'];
        });

        $addresses = [];
        $customerId = auth('customer')->user()->id;

        $address = CustomerAddress::with(['village.district.regency.province'])
            ->where('customer_id', $customerId)
            ->get();

        if ($address->isEmpty()) {
            // Handle case when there are no addresses
            // e.g., return a view with a message or redirect to an address creation page
        } else {
            foreach ($address as $a) {
                $addresses[] = [
                    'id' => $a->id,
                    'recipient' => $a->recipient,
                    'phone_number' => $a->phone_number,
                    'address' => $a->address,
                    'village' => $a->village->name,
                    'district' => $a->village->district->name,
                    'regency' => $a->village->district->regency->name,
                    'province' => $a->village->district->regency->province->name,
                ];
            }
        }

        return view('pengguna.pesanan.checkout', compact('addresses', 'carts', 'subtotal', 'weight'));
    }



    public function getCity()
    {
        $cities = Regency::where('province_id', request()->province_id)->get();

        return response()->json(['status' => 'success', 'data' => $cities]);
    }

    public function getDistrict()
    {
        $districts = District::where('regency_id', request()->regency_id)->get();

        return response()->json(['status' => 'success', 'data' => $districts]);
    }

    public function getVillage()
    {
        $village = Village::where('district_id', request()->district_id)->get();

        return response()->json(['status' => 'success', 'data' => $village]);
    }

    public function generateRandomPassword()
    {
        // Daftar kata yang dapat digunakan
        $words = [
            'kantong', 'hdpe', 'airsumur', 'kopi', 'hitam', 'daun', 'pohon', 'batu', 'sungai', 'hujan', 'plastik',
        ];

        // Daftar karakter khusus
        $specialChars = ['%', '@', '#', '$', '!', '&'];

        // Daftar angka
        $numbers = range(0, 255);

        // Memilih kata secara acak
        $word1 = $words[array_rand($words)];
        $word2 = $words[array_rand($words)];

        // Memastikan dua kata tidak sama
        while ($word1 == $word2) {
            $word2 = $words[array_rand($words)];
        }

        // Memilih angka secara acak
        $number = $numbers[array_rand($numbers)];

        // Memilih karakter khusus secara acak
        $specialChar = $specialChars[array_rand($specialChars)];

        // Menggabungkan kata, angka, dan karakter khusus
        $password = $word1 . $number . $word2 . $specialChar;

        return $password;
    }

    public function processCheckout(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required|string|max:100',
            'customer_phone' => 'required',
            'email' => 'required|email',
            'customer_address' => 'required|string',
            'province_id' => 'required|exists:provinces,id',
            'regency_id' => 'required|exists:cities,id',
            'district_id' => 'required|exists:districts,id',
            // 'courier' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $affiliate = json_decode(request()->cookie('afiliasi'), true);
            $explodeAffiliate = explode('-', $affiliate);

            $customer = Customer::where('email', $request->email)->first();
            if (!auth()->guard('customer')->check() && $customer) {
                return redirect()->back()->with(['error' => 'Silahkan Login Terlebih Dahulu']);
            }

            $carts = $this->getCarts();
            $subtotal = collect($carts)->sum(function ($q) {
                return $q['qty'] * $q['product_price'];
            });

            if (!auth()->guard('customer')->check()) {
                $password = $this->generateRandomPassword();
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
            }

            // $shipping = explode('-', $request->courier);
            $order = Order::create([
                'invoice' => Str::random(4) . '-' . time(),
                'customer_id' => $customer->id,
                'customer_name' => $customer->name,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'district_id' => $request->district_id,
                'subtotal' => $subtotal,
                // 'cost' => $shipping[2],
                // 'shipping' => $shipping[0] . '-' . $shipping[1],
                'ref' => $affiliate != '' && $explodeAffiliate[0] != auth()->guard('customer')->user()->id ? $affiliate : null,
            ]);

            foreach ($carts as $row) {
                $product = Product::find($row['product_id']);
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $row['product_id'],
                    'price' => $row['product_price'],
                    'qty' => $row['qty'],
                    'weight' => $product->weight,
                ]);
            }

            DB::commit();

            $carts = [];
            $cookie = cookie('carts', json_encode($carts), 2880);
            Cookie::queue(Cookie::forget('afiliasi'));

            if (!auth()->guard('customer')->check()) {
                Mail::to($request->email)->send(new CustomerRegisterMail($customer, $password));
            }

            return redirect(route('front.finish_checkout', $order->invoice))->cookie($cookie);
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function storeCustomer(Request $request)
    {
    }

    public function checkoutFinish($invoice)
    {
        $order = Order::with(['district.city'])->where('invoice', $invoice)->first();

        return view('ecommerce.checkout_finish', compact('order'));
    }
}
