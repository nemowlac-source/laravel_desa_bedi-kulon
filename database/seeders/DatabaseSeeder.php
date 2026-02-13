<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Desa
        User::create([
            'name' => 'Pak Kades',
            'email' => 'admin@desa.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        // 2. Akun Anggota (Perpustakaan)
        User::create([
            'name' => 'Budi Anggota',
            'email' => 'budi@desa.com',
            'role' => 'anggota',
            'password' => Hash::make('password'),
        ]);

        // 3. Akun Pengunjung (Masyarakat Umum Terdaftar)
        User::create([
            'name' => 'Siti Warga',
            'email' => 'siti@desa.com',
            'role' => 'pengunjung',
            'password' => Hash::make('password'),
        ]);

        // --- 2. PANGGIL SEEDER LAINNYA ---
        // Masukkan semua Class Seeder yang sudah kita buat di sini
        $this->call([         // Data Agregat per Dusun
            PendudukAgamaSeeder::class,     // Statistik Agama
            PendudukKawinSeeder::class,     // Statistik Perkawinan
            PendudukPekerjaanSeeder::class, // Statistik Pekerjaan
            PendudukPendidikanSeeder::class, // Statistik Pendidikan
            PendudukUsiaSeeder::class,      // Statistik Umur (Piramida)
            PendudukWajibPilihSeeder::class, // Statistik Wajib Pilih
            // Tambahkan seeder lain jika ada (misal: IdmSeeder)
        ]);
    }
}
