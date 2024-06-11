<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProvinceSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            SettingSeeder::class,
        ]);

        Order::factory(10)->create();
        OrderDetail::factory(100)->create();
    }
}
