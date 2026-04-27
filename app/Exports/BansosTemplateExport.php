<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BansosTemplateExport implements FromArray, WithHeadings, WithStyles
{
    public function headings(): array
    {
        return [
            'nama_penerima',
            'nik',
            'alamat',
            'jenis_bantuan',
        ];
    }

    public function array(): array
    {
        return [
            ['Budi Santoso', '3502123456789012', 'Dusun Krajan RT 01 RW 01', 'BLT Dana Desa'],
            ['Siti Aminah', '3502123456789013', 'Dusun Krajan RT 02 RW 01', 'PKH (Program Keluarga Harapan)'],
            ['Ahmad Fauzi', '3502123456789014', 'Dusun Sumber RT 01 RW 02', 'BPNT (Sembako)'],
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
