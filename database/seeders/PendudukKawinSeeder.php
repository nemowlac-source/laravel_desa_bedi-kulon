<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukKawinSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['status' => 'Belum Kawin', 'jumlah' => 624],
            ['status' => 'Kawin', 'jumlah' => 459],
            ['status' => 'Cerai Mati', 'jumlah' => 69],
            ['status' => 'Kawin Tercatat', 'jumlah' => 5],
            ['status' => 'Cerai Hidup', 'jumlah' => 4],
            ['status' => 'Kawin Tidak Tercatat', 'jumlah' => 0],
        ];

        DB::table('penduduk_kawins')->insert($data);
    }
}
