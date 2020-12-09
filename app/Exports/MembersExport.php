<?php

namespace App\Exports;

use App\Models\Members;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MembersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Members::all();
    }

    public function map($members): array
    {
        return [
            $members->id,
            $members->nim,
            $members->nama,
            $members->tempat_lahir,
            $members->tanggal_lahir,
            $members->jenis_kelamin,
            $members->prodi,
            $members->email
        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'NIM',
            'NAMA',
            'TEMPAT LAHIR',
            'TANGGAL LAHIR',
            'JENIS KELAMIN',
            'PRODI',
            'EMAIL',
        ];
    }
}
