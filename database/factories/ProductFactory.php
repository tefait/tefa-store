<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(5, true),
            'weight' => $this->faker->randomNumber(3, true),
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
        ];
    }
}
