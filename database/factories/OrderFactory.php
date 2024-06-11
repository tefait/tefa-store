<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice' => Str::random(4).'-'.time(),
            'customer_id' => $this->faker->randomElement(Customer::pluck('id')),
            'customer_name' => $this->faker->name(),
            'customer_phone' => $this->faker->phoneNumber(),
            'customer_address' => $this->faker->streetAddress(),
            'district_id' => $this->faker->randomElement(District::pluck('id')),
            'subtotal' => $this->faker->randomNumber(5, true),
        ];
    }
}
