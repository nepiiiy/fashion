<?php

namespace Database\Seeders;

use App\Models\Baju;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Baju::factory()->count(3)->create();
    }
}
