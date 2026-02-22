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
        Schema::create('stuntings', function (Blueprint $table) {
            $table->id();
            $table->year('tahun'); // Untuk filter tahun di grafik
            $table->integer('keluarga_sasaran')->default(0);
            $table->integer('berisiko')->default(0);
            $table->integer('baduta')->default(0);
            $table->integer('balita')->default(0);
            $table->integer('pus')->default(0); // Pasangan Usia Subur
            $table->integer('pus_hamil')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stuntings');
    }
};
