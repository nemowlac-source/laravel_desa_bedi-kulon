<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukPendidikanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['tingkat_pendidikan' => 'Tidak/Belum Sekolah', 'jumlah' => 150],
            ['tingkat_pendidikan' => 'Belum Tamat SD', 'jumlah' => 80],
            ['tingkat_pendidikan' => 'Tamat SD/Sederajat', 'jumlah' => 300],
            ['tingkat_pendidikan' => 'SLTP/Sederajat', 'jumlah' => 250],
            ['tingkat_pendidikan' => 'SLTA/Sederajat', 'jumlah' => 350],
            ['tingkat_pendidikan' => 'Diploma I/II', 'jumlah' => 20],
            ['tingkat_pendidikan' => 'Akademi/Diploma III/S.Muda', 'jumlah' => 45],
            ['tingkat_pendidikan' => 'Diploma IV/Strata I', 'jumlah' => 120],
            ['tingkat_pendidikan' => 'Strata II', 'jumlah' => 10],
            ['tingkat_pendidikan' => 'Strata III', 'jumlah' => 2],
        ];

        DB::table('penduduk_pendidikans')->insert($data);
    }
}
