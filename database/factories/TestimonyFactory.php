<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimony>
 */
class TestimonyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penilaian' => $this->faker->randomFloat(max: 5),
            'kutipan' => $this->faker->sentence(),
            'instansi' => $this->faker->company(),
            'terpilih' => $this->faker->boolean(),
            'customer_id' => $this->faker->randomElement(Customer::pluck('id')),
            'product_id' => $this->faker->randomElement(Product::pluck('id')),
        ];
    }
}
