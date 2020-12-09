<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\Members;
use App\Models\Books;
use App\Models\Dashboards;
use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    //buat method index
    public function index()
    {
        $transactions = \App\Models\Transactions::all();
        $books = \App\Models\Books::all();
        //Siapkan data untuk chart
        $categories = [];
        $data = [];

        foreach($books as $book)
        {
            $categories[] = $book->judul;
            $data[] = $book->jumlah_buku;
        }
        // dd($data);
        return view('dashboards.index', ['transactions'=> $transactions,
                                        'books' => $books, 'categories' => $categories,
                                        'data' => $data]);
    }

}
