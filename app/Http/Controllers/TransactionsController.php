<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    //buat method index
    public function index(Request $request)
    {
        $transactions = Transactions::all();
        return view('transactions.index' , compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'judul' => 'required',
        //     'nim' => 'required|max:10',
        //     'tanggal_pinjam' => 'required',
        //     'tanggal_kembali' => 'required',
        //     'status' => 'required'
        // ]);

        Transactions::create($request->all());
        return redirect('/transactions')->with('pesan', 'Data peminjaman berhasil ditambahkan');
    }

    public function show(Transactions $transactions)
    {
       //
    }

    public function edit(Transactions $transactions)
    {
       Transactions::find($transactions);
       return view('transactions.edit', compact('transactions'));
    }

    public function update(Request $request, Transactions $transactions)
    {
       Transactions::where('id', $transactions->id)
       ->update([
            'judul' => $request->id_books,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status
       ]);

        return redirect('/transactions')->with('pesan','Data peminjaman berhasil diubah');
    }

    public function destroy(Transactions $transactions)
    {
        Transactions::destroy($transactions->id);
        return redirect('/transactions')->with('pesan','Data peminjaman berhasil dihapus');
    }

    public function back(Transactions $transactions)
    {
        Transactions::back($transactions->id);
        return redirect('/transactions')->with('pesan','Buku berhasil dikembalikan');
    }

    public function extend(Transactions $transactions)
    {
        Transactions::extend($transactions->id);
        return redirect('/transactions')->with('pesan','Buku berhasil diperpanjang');
    }

}
