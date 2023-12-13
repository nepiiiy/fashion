<?php

namespace Database\Seeders;

use App\Models\CatePant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatePantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CatePant::create([
            'name_kategori' => 'Culottes',
        ]);

        CatePant::create([
            'name_kategori' => 'Joger Pants',
        ]);

        CatePant::create([
            'name_kategori' => 'Palazzo',
        ]);

        CatePant::create([
            'name_kategori' => 'Pegged Pants',
        ]);

        CatePant::create([
            'name_kategori' => 'Slim Fit Jeans',
        ]);
        CatePant::create([
            'name_kategori' => 'Slacks',
        ]);
        CatePant::create([
            'name_kategori' => 'Overall',
        ]);
        CatePant::create([
            'name_kategori' => 'Cargo Pants',
        ]);
    }
}
