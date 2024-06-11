<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = $this->faker->randomElement(Product::all()); // Get a random Product
        $quantity = $this->faker->randomNumber(1, true);

        return [
            'order_id' => $this->faker->randomElement(Order::pluck('id')),
            'product_id' => $product->id,
            'price' => $product->price, // Use price from the related Product
            'qty' => $quantity,
            'weight' => $product->weight, // Weight based on product weight and random quantity
        ];
    }
}
