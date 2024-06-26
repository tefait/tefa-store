<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Souvenirs',
            'slug' => 'souvenirs',
            'image' => 'assets/kategori/kategori1.jpg',
        ]);
        Category::create([
            'name' => 'Tumbler',
            'slug' => 'tumbler',
            'parent_id' => 1,
            'image' => 'assets/kategori/kategori1.jpg',
        ]);
        Category::create([
            'name' => 'Totebag',
            'slug' => 'totebag',
            'parent_id' => 1,
            'image' => 'assets/kategori/kategori1.jpg',
        ]);

        Category::create([
            'name' => 'Gantungan Kunci',
            'slug' => 'ganci',
            'parent_id' => 1,
            'image' => 'assets/kategori/kategori1.jpg',
        ]);
        Category::create([
            'name' => 'Pin',
            'slug' => 'pin',
            'parent_id' => 1,
            'image' => 'assets/kategori/kategori1.jpg',
        ]);
        Category::create([
            'name' => 'Mug',
            'slug' => 'mug',
            'parent_id' => 1,
            'image' => 'assets/kategori/kategori1.jpg',
        ]);
        Category::create([
            'name' => 'Kaos',
            'slug' => 'kaos',
            'parent_id' => 1,
            'image' => 'assets/kategori/kategori1.jpg',
        ]);
    }
}
