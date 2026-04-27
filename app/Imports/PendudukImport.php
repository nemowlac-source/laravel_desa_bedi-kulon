<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PendudukImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Penduduk([
            'nama_wilayah' => $row['nama_wilayah'] ?? null,
            'kk' => $row['kk'] ?? 0,
            'laki_laki' => $row['laki_laki'] ?? 0,
            'perempuan' => $row['perempuan'] ?? 0,
            'penduduk_sementara' => $row['penduduk_sementara'] ?? 0,
            'mutasi_masuk' => $row['mutasi_masuk'] ?? 0,
            'mutasi_keluar' => $row['mutasi_keluar'] ?? 0,
            'kelahiran' => $row['kelahiran'] ?? 0,
            'kematian' => $row['kematian'] ?? 0,
        ]);
    }

    public function rules(): array
    {
        return [
            '*.nama_wilayah' => 'required|string|max:255',
            '*.kk' => 'required|numeric|min:0',
            '*.laki_laki' => 'required|numeric|min:0',
            '*.perempuan' => 'required|numeric|min:0',
        ];
    }
}
