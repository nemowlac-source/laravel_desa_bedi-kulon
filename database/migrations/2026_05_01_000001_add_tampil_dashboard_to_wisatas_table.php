<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->boolean('tampil_dashboard')->default(false)->after('views');
        });
    }

    public function down(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->dropColumn('tampil_dashboard');
        });
    }
};
