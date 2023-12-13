<?php

use App\Models\Kategori;
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
        Schema::create('bajus', function (Blueprint $table) {
            $table->id();
            $table->string('name_baju');
            $table->foreignIdFor(Kategori::class)->constrained()->cascadeOnDelete();
            $table->longText('deskripsi_baju');
            $table->string('gambar_baju');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bajus');
    }
};
