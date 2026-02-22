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
        Schema::table('apbds', function (Blueprint $table) {
            // Menambahkan kolom uraian setelah kolom kategori
            $table->string('uraian')->nullable()->after('kategori');
        });
    }

    public function down(): void
    {
        Schema::table('apbds', function (Blueprint $table) {
            $table->dropColumn('uraian');
        });
    }
};
