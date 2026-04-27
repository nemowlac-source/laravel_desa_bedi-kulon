<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Font;

class PendudukTemplateExport implements FromArray, WithHeadings, WithStyles
{
    public function array(): array
    {
        return [
            ['Dusun 1', 150, 520, 480, 5, 10, 3, 8, 2],
            ['Dusun 2', 200, 680, 650, 8, 15, 5, 12, 3],
        ];
    }

    public function headings(): array
    {
        return [
            'nama_wilayah',
            'kk',
            'laki_laki',
            'perempuan',
            'penduduk_sementara',
            'mutasi_masuk',
            'mutasi_keluar',
            'kelahiran',
            'kematian',
        ];
    }

    public function styles($sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'color' => ['rgb' => 'FFFFFF']],
                'fill' => ['fillType' => Fill::FILL_SOLID, 'startColor' => ['rgb' => '366092']],
            ],
        ];
    }
}
