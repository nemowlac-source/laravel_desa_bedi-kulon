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
        Schema::create('idms', function (Blueprint $table) {
            $table->id();
            $table->year('tahun');
            $table->decimal('iks', 5, 4); // Indeks Ketahanan Sosial (cth: 0.8875)
            $table->decimal('ike', 5, 4); // Indeks Ketahanan Ekonomi
            $table->decimal('ikl', 5, 4); // Indeks Ketahanan Lingkungan
            $table->decimal('nilai_idm', 5, 4); // Rata-rata dari ketiganya
            $table->string('status');     // Mandiri, Maju, Berkembang, dll
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idms');
    }
};
