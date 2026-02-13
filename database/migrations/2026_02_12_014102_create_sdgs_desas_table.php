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
        Schema::create('sdgs_desas', function (Blueprint $table) {
            $table->id();
            $table->integer('goal_number');      // Urutan Goal (1-18)
            $table->string('title');             // Judul, misal: Desa Tanpa Kemiskinan
            $table->text('description')->nullable();
            $table->string('image')->nullable(); // Icon SDGs
            $table->float('score')->default(0);  // Nilai Capaian (0-100)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sdgs_desas');
    }
};
