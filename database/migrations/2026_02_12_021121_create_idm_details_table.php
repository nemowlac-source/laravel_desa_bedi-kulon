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
        Schema::create('idm_details', function (Blueprint $table) {
            $table->id();
            // Relasi ke tabel IDM Utama (agar data ini menempel ke Tahun tertentu)
            $table->foreignId('idm_id')->constrained('idms')->onDelete('cascade');

            $table->string('indikator');        // Contoh: Skor Dokter
            $table->integer('skor');            // Contoh: 0
            $table->text('keterangan');         // Contoh: Jumlah Dokter Tidak ada
            $table->text('kegiatan')->nullable(); // Contoh: Pengadaan Min 1 org Dokter
            $table->decimal('nilai_plus', 8, 4);  // Contoh: 0.0095

            // Kolom Pelaksana (Sesuai kolom di gambar)
            $table->string('pelaksana_pusat')->nullable();
            $table->string('pelaksana_provinsi')->nullable();
            $table->string('pelaksana_kabupaten')->nullable(); // Contoh: DINKES
            $table->string('pelaksana_desa')->nullable();
            $table->string('pelaksana_csr')->nullable();
            $table->string('pelaksana_lainnya')->nullable();   // Contoh: BPJS

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idm_details');
    }
};
