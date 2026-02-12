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
        Schema::create('penduduk_wajib_pilihs', function (Blueprint $table) {
            $table->id();
            $table->string('kategori'); // Contoh: Wajib Pilih Laki-laki, Wajib Pilih Perempuan
            $table->integer('jumlah');  // Jumlah orang
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk_wajib_pilihs');
    }
};
