<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukUsiaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kelompok_umur' => '0-4', 'laki_laki' => 30, 'perempuan' => 28],
            ['kelompok_umur' => '5-9', 'laki_laki' => 41, 'perempuan' => 35],
            ['kelompok_umur' => '10-14', 'laki_laki' => 35, 'perempuan' => 45],
            ['kelompok_umur' => '15-19', 'laki_laki' => 25, 'perempuan' => 30],
            ['kelompok_umur' => '20-24', 'laki_laki' => 20, 'perempuan' => 25],
            ['kelompok_umur' => '25-29', 'laki_laki' => 35, 'perempuan' => 32],
            ['kelompok_umur' => '30-34', 'laki_laki' => 40, 'perempuan' => 38],
            ['kelompok_umur' => '35-39', 'laki_laki' => 38, 'perempuan' => 40],
            ['kelompok_umur' => '40-44', 'laki_laki' => 35, 'perempuan' => 35],
            ['kelompok_umur' => '45-49', 'laki_laki' => 30, 'perempuan' => 32],
            ['kelompok_umur' => '50-54', 'laki_laki' => 25, 'perempuan' => 28],
            ['kelompok_umur' => '55-59', 'laki_laki' => 20, 'perempuan' => 22],
            ['kelompok_umur' => '60-64', 'laki_laki' => 15, 'perempuan' => 18],
            ['kelompok_umur' => '65-69', 'laki_laki' => 10, 'perempuan' => 12],
            ['kelompok_umur' => '70-74', 'laki_laki' => 5, 'perempuan' => 8],
            ['kelompok_umur' => '75+', 'laki_laki' => 2, 'perempuan' => 5],
        ];

        DB::table('penduduk_usias')->insert($data);
    }
}
