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
            'password' => Hash::make('rahasia'),
        ]);
        User::factory()->create([
            'name' => 'Mimin Gudang',
            'email' => 'gudang@gmail.com',
            'role' => 1,
            'password' => Hash::make('rahasia'),
        ]);

        // Customer::create([
        //     'name' => 'Muhammad Azfa',
        //     'email' => 'azfasa15@gmail.com',
        //     'phone_number' => '085156105763',
        //     'address' => 'Sumedang',
        //     'village_id' => 3211050011,
        //     'status' => true,
        //     'activate_token' => \Illuminate\Support\Str::random(32),
        //     'password' => Hash::make('rahasia'),
        // ]);
    }
}
