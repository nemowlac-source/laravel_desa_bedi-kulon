<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukAgamaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['agama' => 'Islam', 'jumlah' => 1162],
            ['agama' => 'Kristen', 'jumlah' => 100],
            ['agama' => 'Katolik', 'jumlah' => 0],
            ['agama' => 'Hindu', 'jumlah' => 0],
            ['agama' => 'Buddha', 'jumlah' => 0],
            ['agama' => 'Konghucu', 'jumlah' => 0],
            ['agama' => 'Kepercayaan Lainnya', 'jumlah' => 0],
        ];

        DB::table('penduduk_agamas')->insert($data);
    }
}
