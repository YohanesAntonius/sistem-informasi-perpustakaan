<?php

namespace App\Exports;

use App\Models\Books;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BooksExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Books::all();
    }

    public function map($books): array
    {
        return [
            $books->id,
            $books->judul,
            $books->pengarang,
            $books->penerbit,
            $books->tahun_terbit,
            $books->isbn,
            $books->jumlah_buku,
            $books->lokasi,
            $books->tanggal_input
        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'NAMA BUKU',
            'PENGARANG',
            'PENERBIT',
            'TAHUN TERBIT',
            'ISBN',
            'JUMLAH BUKU',
            'LOKASI',
            'TANGGAL INPUT',
        ];
    }
}
