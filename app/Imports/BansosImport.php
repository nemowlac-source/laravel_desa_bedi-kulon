<?php

namespace App\Imports;

use App\Models\Bansos;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class BansosImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Bansos([
            'nama_penerima' => $row['nama_penerima'],
            'nik'           => $row['nik'] ?? null,
            'alamat'        => $row['alamat'],
            'jenis_bantuan' => $row['jenis_bantuan'],
        ]);
    }

    public function rules(): array
    {
        return [
            'nama_penerima' => 'required|string|max:255',
            'nik'           => 'nullable|string|max:20',
            'alamat'        => 'required|string|max:255',
            'jenis_bantuan' => 'required|string|max:255',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'nama_penerima.required' => 'Kolom Nama Penerima wajib diisi.',
            'alamat.required'        => 'Kolom Alamat wajib diisi.',
            'jenis_bantuan.required' => 'Kolom Jenis Bantuan wajib diisi.',
        ];
    }
}
