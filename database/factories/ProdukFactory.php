<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
    Schema::create('produks', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->integer('harga');
        $table->string('deskripsi');
        $table->string('foto');
        $table->tinyInteger('status');
        $table->timestamps();
    });
        */
        return [
            'nama' => fake()->word(),
            'harga' => fake()->numberBetween(500, 100000),
            'deskripsi' => fake()->sentence(),
            'foto' => fake()->imageUrl(),
            'status' => fake()->numberBetween(0, 4),
        ];
        /*
        0 => Dibatalkan
        1 => Diproses
        2 => Dikirim
        3 => Diterima
        */ 
    }
}
