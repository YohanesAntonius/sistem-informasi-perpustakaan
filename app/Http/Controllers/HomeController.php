<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Members;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transactions = Transactions::get();
        $members = Members::get();
        $books = Books::get();
        if(Auth::user()->level == 'user')
        {
            $transaksi = Transactions::where('status', 'pinjam')
                                      ->where('nim', Auth::user()->members->id)
                                      ->get();
        }else{
            $transaksi = Transactions::where('status', 'pinjam')->get();
        }
        return view('home', compact('transactions', 'members', 'books', 'transaksi'));
    }
}
