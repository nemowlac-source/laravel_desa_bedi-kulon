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
        Schema::table('wisatas', function (Blueprint $table) {
            // Menambahkan kolom views dengan nilai awal 0
            $table->integer('views')->default(0)->after('deskripsi');
        });
    }

    public function down(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->dropColumn('views');
        });
    }
};
