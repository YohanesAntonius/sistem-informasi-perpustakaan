<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\User;
use App\Exports\TransactionsExport;
use App\Models\Books;
use App\Models\Members;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //buat method index
    public function index(Request $request)
    {
        if(Auth::user()->role == 'anggota')
        {
            $datas = Transactions::where('members_id', Auth::user()->members->id)
                                  ->get();
        } else {
            $datas = Transactions::get();
        }
        // $transactions = Transactions::all();
        return view('transactions.index' , compact('datas'));
    }

    public function create()
    {
        $getRow = Transactions::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();

        $lastId = $getRow->first();

        $kode = "TR00001";

        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "TR0000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "TR000".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "TR00".''.($lastId->id + 1);
            } else if ($lastId->id < 9999) {
                    $kode = "TR0".''.($lastId->id + 1);
            } else {
                    $kode = "TR".''.($lastId->id + 1);
            }
        }

        $books = Books::where('jumlah_buku', '>', 0)->get();
        $members = Members::get();
        return view('transactions.create', compact('books', 'kode', 'members'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_transaksi' => 'required|string|max:255',
            'members_id' => 'required',
            'books_id' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required'
        ]);

        $transaksi = Transactions::create([
            'kode_transaksi' => $request->get('kode_transaksi'),
            'members_id' => $request->get('members_id'),
            'books_id' => $request->get('books_id'),
            'tanggal_pinjam' => $request->get('tanggal_pinjam'),
            'tanggal_kembali' => $request->get('tanggal_kembali'),
            'status' => 'pinjam'
        ]);

        $transaksi->books->where('id', $transaksi->books_id)
                         ->update([
                             'jumlah_buku' => ($transaksi->books->jumlah_buku - 1),
                         ]);
        // Transactions::create($request->all());
        return redirect('/transactions')->with('pesan', 'Data peminjaman berhasil ditambahkan');
    }

    public function show(Transactions $transactions)
    {
        //
    }

    public function edit($id)
    {
        $transaksi = Transactions::findOrFail($id);

        if((Auth::user()->role == 'anggota') && (Auth::user()->members->id != $transaksi->members_id)) {
            return redirect('/transactions')->with('pesan', 'Dilarang masuk');
    }
        return view('books.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
       $transaksi = Transactions::find($id);

       $transaksi->update([
                    'status' => 'kembali'
                ]);

        $transaksi->books->where('id', $transaksi->books->id)
                         ->update([
                             'jumlah_buku' => ($transaksi->books->jumlah_buku + 1),
                         ]);

        return redirect('/transactions')->with('pesan','Data peminjaman berhasil diubah');
    }

    public function destroy(Transactions $transactions)
    {
        Transactions::destroy($transactions->id);
        return redirect('/transactions')->with('pesan','Data peminjaman berhasil dihapus');
    }

    public function exportExcel()
    {
        return Excel::download(new TransactionsExport, 'transactions.xlsx');
    }

    // public function exportPdf()
    // {
    //     $pdf = PDF::loadHTML('<h1>DATA TRANSAKSI</h1>');
    //     return $pdf->download('transactions.pdf');
    // }

}
