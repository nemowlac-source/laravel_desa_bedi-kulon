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
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            $table->string('judul');              // Judul foto (misal: "Kerja Bakti")
            $table->string('gambar');             // Lokasi file foto disimpan
            $table->text('deskripsi')->nullable(); // Penjelasan (Boleh kosong)
            $table->date('tanggal')->nullable();   // Tanggal kegiatan (Opsional)
            $table->timestamps();                 // Created_at & Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};
