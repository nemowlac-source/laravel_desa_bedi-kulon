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
        Schema::table('idm_details', function (Blueprint $table) {
            // Kita tambahkan kolom ENUM 'jenis' setelah idm_id
            // Default kita set 'IKS' agar data lama tidak error, nanti bisa diedit
            $table->enum('jenis', ['IKS', 'IKE', 'IKL'])->after('idm_id')->default('IKS');

            // Tambahkan no_urut juga biar urutannya rapi sesuai standar
            $table->integer('no_urut')->after('jenis')->default(1);
        });
    }

    public function down(): void
    {
        Schema::table('idm_details', function (Blueprint $table) {
            $table->dropColumn(['jenis', 'no_urut']);
        });
    }
};
