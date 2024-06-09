<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mimin',
            'email' => 'admin@gmail.com',
            'role' => 0,
            'password' => Hash::make('12345678'),
        ]);
        User::factory()->create([
            'name' => 'Mimin Gudang',
            'email' => 'gudang@gmail.com',
            'role' => 1,
            'password' => Hash::make('12345678'),
        ]);
        Customer::create([
            'name' => 'Muhammad Azfa',
            'email' => 'azfasa15@gmail.com',
            'phone_number' => '085156105763',
            'address' => 'Sumedang',
            'district_id' => 6082,
            'status' => true,
            'activate_token' => \Illuminate\Support\Str::random(32),
            'password' => Hash::make('12345678'),
        ]);
    }
}
