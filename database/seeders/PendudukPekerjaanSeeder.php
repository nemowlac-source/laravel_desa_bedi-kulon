<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukPekerjaanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Data Besar (Untuk Kartu)
            ['nama_pekerjaan' => 'Pelajar/Mahasiswa', 'jumlah' => 327],
            ['nama_pekerjaan' => 'Belum/Tidak Bekerja', 'jumlah' => 274],
            ['nama_pekerjaan' => 'Mengurus Rumah Tangga', 'jumlah' => 272],
            ['nama_pekerjaan' => 'Karyawan Swasta', 'jumlah' => 117],
            ['nama_pekerjaan' => 'Nelayan/Perikanan', 'jumlah' => 50],
            ['nama_pekerjaan' => 'Petani/Pekebun', 'jumlah' => 39],

            // Data Kecil (Untuk Tabel)
            ['nama_pekerjaan' => 'Pegawai Negeri Sipil (PNS)', 'jumlah' => 8],
            ['nama_pekerjaan' => 'Guru Swasta', 'jumlah' => 6],
            ['nama_pekerjaan' => 'Perawat Swasta', 'jumlah' => 5],
            ['nama_pekerjaan' => 'Karyawan Honorer', 'jumlah' => 5],
            ['nama_pekerjaan' => 'Guru', 'jumlah' => 4],
            ['nama_pekerjaan' => 'Buruh Harian Lepas', 'jumlah' => 4],
            ['nama_pekerjaan' => 'Tukang Batu', 'jumlah' => 2],
            ['nama_pekerjaan' => 'Buruh Tani/Perkebunan', 'jumlah' => 2],
        ];

        DB::table('penduduk_pekerjaans')->insert($data);
    }
}
