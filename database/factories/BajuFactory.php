<?php

namespace Database\Factories;

use App\Models\Kategori;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Baju>
 */
class BajuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gambar_baju' => fake()->imageUrl(),
            'name_baju' => fake()->title(),
            'kategori_id' => fake()->numberBetween(1,5),
            'deskripsi_baju' => fake()->paragraph(),

        ];
    }
}
