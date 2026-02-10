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
        Schema::create('apbds', function (Blueprint $table) {
            $table->id();
            $table->year('tahun'); // Tahun Anggaran (2025, 2026, dst)
            $table->enum('jenis', ['Pendapatan', 'Belanja', 'Pembiayaan']);
            $table->string('kategori'); // Contoh: Dana Desa, Bidang Pembangunan
            $table->bigInteger('anggaran'); // Rencana (Rp)
            $table->bigInteger('realisasi'); // Yang sudah terpakai (Rp)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apbds');
    }
};
