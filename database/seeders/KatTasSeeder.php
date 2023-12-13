<?php

namespace Database\Seeders;

use App\Models\Kat_Tas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatTasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kat_Tas::create([
            'name_kategori' => 'Backpack',
        ]);
        Kat_Tas::create([
            'name_kategori' => 'Waist Bag',
        ]);
        Kat_Tas::create([
            'name_kategori' => 'Envelope Bag',
        ]);
        Kat_Tas::create([
            'name_kategori' => 'Sling Bag',
        ]);
        Kat_Tas::create([
            'name_kategori' => 'Tote Bag',
        ]);
    }
}
