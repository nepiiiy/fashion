<?php

namespace Database\Seeders;

use App\Models\Kat_Sepatu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatSepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kat_Sepatu::create([
            'name_kategori' => 'Sneakers',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Wedges',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Flat Shoes',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Ballerina Flats',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Loafers',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Boots',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Stiletto',
        ]);
        Kat_Sepatu::create([
            'name_kategori' => 'Loafers',
        ]);
    }
}
