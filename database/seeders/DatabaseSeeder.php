<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SettingSeeder::class,
            IndoRegionSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
        Product::factory(32)->has(ProductImage::factory()->count(4), 'images')->create();
        Customer::factory(15)->has(Comment::factory()->count(2), 'comments')->create();
        Order::factory(10)->has(OrderDetail::factory()->count(2), 'details')->create();
    }
}
