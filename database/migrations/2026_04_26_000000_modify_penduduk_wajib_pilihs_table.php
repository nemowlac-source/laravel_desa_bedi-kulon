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
        Schema::table('penduduk_wajib_pilihs', function (Blueprint $table) {
            // Drop the old kategori column
            $table->dropColumn('kategori');
            // Add tahun and jumlah_pemilih columns
            $table->year('tahun')->after('id');
            $table->renameColumn('jumlah', 'jumlah_pemilih');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penduduk_wajib_pilihs', function (Blueprint $table) {
            // Restore old structure
            $table->renameColumn('jumlah_pemilih', 'jumlah');
            $table->string('kategori')->after('id');
            $table->dropColumn('tahun');
        });
    }
};
