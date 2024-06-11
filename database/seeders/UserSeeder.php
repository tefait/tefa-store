<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mimin',
            'email' => 'admin@gmail.com',
            'role' => 0,
            'password' => Hash::make('rahasia'),
        ]);
        User::factory()->create([
            'name' => 'Mimin Gudang',
            'email' => 'gudang@gmail.com',
            'role' => 1,
            'password' => Hash::make('rahasia'),
        ]);

        Customer::create([
            'name' => 'Muhammad Azfa',
            'email' => 'azfasa15@gmail.com',
            'phone_number' => '085156105763',
            'address' => 'Sumedang',
            'district_id' => 6082,
            'status' => true,
            'activate_token' => \Illuminate\Support\Str::random(32),
            'password' => Hash::make('rahasia'),
        ]);
        Customer::factory(15)->create();

        // $order_id =Str::random(4).'-'.time();
        // Order::create([
        //     'invoice' => $order_id,
        //     'customer_id' => 1,
        //     'customer_name' => "Muhammad Azfa",
        //     'customer_phone' => "085156105763",
        //     'customer_address' => "Sumedang",
        //     'district_id' => 6082,
        //     'subtotal' => 100000,
        // ]);
        // OrderDetail::create([
        //     'order_id' => $order_id,
        //     'product_id' => 1,
        //     'price' => 1000,
        //     'qty' => 2,
        //     'weight' => 100,
        // ]);
    }
}
