<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Userinfo>
 */
class UserinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
                    $table->text('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('kodepos');
        */
        return [
            'alamat' => fake()->address(),
            'kota' => fake()->city(),
            'provinsi' => fake()->state(),
            'kecamatan' => fake()->streetName(),
            'kodepos' => fake()->postcode(),

        ];
    }
}
