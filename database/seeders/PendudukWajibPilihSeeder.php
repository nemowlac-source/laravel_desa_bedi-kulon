<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukWajibPilihSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori' => 'Wajib Pilih Laki-laki', 'jumlah' => 450],
            ['kategori' => 'Wajib Pilih Perempuan', 'jumlah' => 420],
            ['kategori' => 'Belum Wajib Pilih', 'jumlah' => 292],
        ];

        DB::table('penduduk_wajib_pilihs')->insert($data);
    }
}
