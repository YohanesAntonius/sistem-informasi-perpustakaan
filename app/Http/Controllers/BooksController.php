<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BooksExport;

class BooksController extends Controller
{
    //buat method index
    public function index(Request $request)
    {
        $books = Books::all();
        return view('books.index' , compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
                'judul' => 'required|max:50',
                'pengarang' => 'required|max:30',
                'penerbit' => 'required|max:50',
                'tahun_terbit' => 'required',
                'isbn' => 'required|max:20',
                'jumlah_buku' => 'required|max:5',
                'lokasi' => 'required|max:50',
                'tanggal_input' => 'required'
            ]);

        Books::create($request->all());
        return redirect('/books')->with('pesan', 'Data buku berhasil ditambahkan');
    }

    public function show(Books $books)
    {
       //
    }

    public function edit(Books $books)
    {
       Books::find($books);
       return view('books.edit', compact('books'));
    }

    public function update(Request $request, Books $books)
    {
       Books::where('id', $books->id)
       ->update([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'jumlah_buku' => $request->jumlah_buku,
            'lokasi' => $request->lokasi,
            'tanggal_input' => $request->tanggal_input

       ]);

        return redirect('/books')->with('pesan','Data buku berhasil diubah');
    }

    public function destroy(Books $books)
    {
        Books::destroy($books->id);
        return redirect('/books')->with('pesan','Data buku berhasil dihapus');
    }

    public function exportExcel()
    {
        return Excel::download(new BooksExport, 'books.xlsx');
    }
}
