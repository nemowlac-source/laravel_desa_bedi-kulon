<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            if (Schema::hasColumn('wisatas', 'gambar')) {
                $table->renameColumn('gambar', 'gambar_thumbnail');
            } else {
                $table->string('gambar_thumbnail')->nullable();
            }

            $table->string('gambar_master')->nullable()->after('gambar_thumbnail')
                ->comment('Master file di private storage');
        });
    }

    public function down(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            if (Schema::hasColumn('wisatas', 'gambar_master')) {
                $table->dropColumn('gambar_master');
            }

            if (Schema::hasColumn('wisatas', 'gambar_thumbnail')) {
                $table->renameColumn('gambar_thumbnail', 'gambar');
            }
        });
    }
};
