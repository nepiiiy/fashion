<?php

namespace Database\Seeders;

use App\Models\Kat_Topi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatTopiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kat_Topi::create([
            'name_kategori' => 'Beani',
        ]);
        Kat_Topi::create([
            'name_kategori' => 'Baseball Hat',
        ]);
        Kat_Topi::create([
            'name_kategori' => 'Flat Cap',
        ]);
        Kat_Topi::create([
            'name_kategori' => 'Bucket Hat',
        ]);
        Kat_Topi::create([
            'name_kategori' => 'Panama Hat',
        ]);
    }
}
