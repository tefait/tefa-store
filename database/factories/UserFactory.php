<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
                    $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('peran');
            $table->string('foto');
            $table->text('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('kodepos');
             */
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'peran' => fake()->numberBetween(0, 4),
            'foto' => fake()->imageUrl(),
            'alamat' => fake()->address(),
            'kota' => fake()->city(),
            'provinsi' => fake()->country(),
            'kecamatan' => fake()->streetAddress(),
            'kodepos' => fake()->postcode(),

            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
