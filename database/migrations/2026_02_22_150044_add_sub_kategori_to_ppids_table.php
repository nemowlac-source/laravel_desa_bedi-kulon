<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ppids', function (Blueprint $table) {
            // Menambahkan kolom sub_kategori setelah kolom kategori
            // nullable() digunakan agar data lama tidak error/bisa kosong sementara
            $table->string('sub_kategori')->nullable()->after('kategori');
        });
    }

    public function down()
    {
        Schema::table('ppids', function (Blueprint $table) {
            // Menghapus kolom jika dilakukan rollback
            $table->dropColumn('sub_kategori');
        });
    }
};
