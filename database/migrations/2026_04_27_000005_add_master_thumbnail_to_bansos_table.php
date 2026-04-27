<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('bansos', function (Blueprint $table) {
            if (Schema::hasColumn('bansos', 'foto')) {
                $table->renameColumn('foto', 'foto_thumbnail');
            } else {
                $table->string('foto_thumbnail')->nullable();
            }

            $table->string('foto_master')->nullable()->after('foto_thumbnail')
                ->comment('Master file di private storage');
        });
    }

    public function down(): void
    {
        Schema::table('bansos', function (Blueprint $table) {
            if (Schema::hasColumn('bansos', 'foto_master')) {
                $table->dropColumn('foto_master');
            }

            if (Schema::hasColumn('bansos', 'foto_thumbnail')) {
                $table->renameColumn('foto_thumbnail', 'foto');
            }
        });
    }
};
