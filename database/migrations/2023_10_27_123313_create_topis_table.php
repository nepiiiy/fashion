<?php

use App\Models\Kat_Topi;
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
        Schema::create('topis', function (Blueprint $table) {
            $table->id();
            $table->string('name_topi');
            $table->foreignIdFor(Kat_Topi::class)->constrained()->cascadeOnDelete();
            $table->longText('deskripsi_topi');
            $table->string('gambar_topi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topis');
    }
};
