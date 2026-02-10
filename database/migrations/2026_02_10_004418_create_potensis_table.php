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
        Schema::create('potensis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');              // Nama Potensi (Misal: Kebun Teh, Mata Air)
            $table->string('lokasi')->nullable(); // Lokasi (Misal: Dusun A, RW 02)
            $table->text('deskripsi');            // Penjelasan detail
            $table->string('gambar');             // Foto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensis');
    }
};
