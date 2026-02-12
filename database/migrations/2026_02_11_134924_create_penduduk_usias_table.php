<?php

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
        Schema::create('penduduk_usias', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok_umur'); // Contoh: "0-4", "5-9"
            $table->integer('laki_laki');
            $table->integer('perempuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_usias');
    }
};
