<?php

use App\Models\CatePant;
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
        Schema::create('pants', function (Blueprint $table) {
            $table->id();
            $table->string('name_celana');
            $table->foreignIdFor(CatePant::class)->constrained()->cascadeOnDelete();
            $table->longText('deskripsi_celana');
            $table->string('gambar_celana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pants');
    }
};
