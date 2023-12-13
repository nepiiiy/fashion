<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'name_kategori' => 'Blouse',
        ]);

        Kategori::create([
            'name_kategori' => 'Sweater',
        ]);

        Kategori::create([
            'name_kategori' => 'T-shirt',
        ]);

        Kategori::create([
            'name_kategori' => 'Gamis',
        ]);

        Kategori::create([
            'name_kategori' => 'Batik',
        ]);
    }
}
