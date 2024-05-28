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
            'slug' => 'Souvenirs',
        ]);
        Category::create([
            'name' => 'Gifts',
            'slug' => 'Gifts',
        ]);
        Category::create([
            'name' => 'Foods',
            'slug' => 'Foods',
        ]);
    }
}
