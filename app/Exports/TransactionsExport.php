<?php

namespace App\Exports;

use App\Models\Transactions;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transactions::all();
    }

    public function map($transactions): array
    {
        return [
            $transactions->id,
            $transactions->kode_transaksi,
            $transactions->members_id,
            $transactions->books_id,
            $transactions->tanggal_pinjam,
            $transactions->tanggal_kembali,
            $transactions->status
        ];
    }

    public function headings(): array
    {
        return [
            'NO',
            'KODE TRANSAKSI',
            'NAMA PEMINJAM',
            'BUKU YANG DIPINJAM',
            'TANGGAL PINJAM',
            'TANGGAL KEMBALI',
            'STATUS',
        ];
    }
}
