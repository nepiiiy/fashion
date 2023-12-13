<?php

use App\Models\Kat_Sepatu;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sepatus', function (Blueprint $table) {
            $table->id();
            $table->string('name_sepatu');
            $table->foreignIdFor(Kat_Sepatu::class)->constrained()->cascadeOnDelete();
            $table->longText('deskripsi_sepatu');
            $table->string('gambar_sepatu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepatus');
    }
};
