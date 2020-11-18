<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //buat method index
    public function index()
    {
        return view('layouts.main');
    }

    //buat method create
    public function create()
    {
        //
    }

    //buat method store
    public function store(Request $request)
    {
        //
    }

    //buat method show
    public function show($id)
    {
        //
    }

    //buat method edit
    public function edit($id)
    {
        //
    }

    //buat method update
    public function update(Request $request, $id)
    {
        //
    }

    //buat method destroy/hapus
    public function destroy($id)
    {
        //
    }
}
