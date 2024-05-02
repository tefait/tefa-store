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
        ];
    }
}
