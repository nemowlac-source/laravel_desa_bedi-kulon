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
        Schema::create('penduduk_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->string('tingkat_pendidikan'); // Contoh: SD, SMP, SMA, S1
            $table->integer('jumlah');            // Jumlah orang
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_pendidikans');
    }
};
