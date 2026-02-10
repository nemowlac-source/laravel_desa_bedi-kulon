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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wilayah');     // Contoh: Dusun A, RT 01
            $table->integer('kk');              // Jumlah Kepala Keluarga
            $table->integer('laki_laki');       // Jumlah Laki-laki
            $table->integer('perempuan');       // Jumlah Perempuan
            $table->integer('penduduk_sementara')->default(0);

            // Mutasi Penduduk
            $table->integer('mutasi_masuk')->default(0);    // Pindah Datang
            $table->integer('mutasi_keluar')->default(0);   // Pindah Keluar
            $table->integer('kelahiran')->default(0);
            $table->integer('kematian')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};
