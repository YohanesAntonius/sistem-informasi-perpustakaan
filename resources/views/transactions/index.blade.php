@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Data Peminjaman Buku Perpusatakaan</h4>
                        {{-- <p class="card-category"> Mau data lebih banyak ?</p> --}}
                    <a href="{{ url('/') }}/transactions/create" class="btn btn-secondary"> Tambah Data</a>
                    <a href="{{ url('/') }}/transactions/" class="btn btn-secondary"> Export to Excel</a>
                    <a href="{{ url('/') }}/transactions/" class="btn btn-secondary"> Export To PDF</a>
                    </div>
                    @if (session('pesan'))
                        <div class="alert alert-info">
                            <b>Sukses</b>:{{session('pesan')}}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Nim
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Tanggal Pinjam
                                        </th>
                                        <th>
                                            Tanggal Kembali
                                        </th>
                                        <th>
                                            Terlambat
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($transactions as $transaksi)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{$transaksi->id_books}} </td>
                                        <td> {{$transaksi->nim}} </td>
                                        <td> {{$transaksi->nama}} </td>
                                        <td> {{$transaksi->tanggal_pinjam}} </td>
                                        <td> {{$transaksi->tanggal_kembali}} </td>
                                        {{-- <td> {{$transaksi->status}} </td> --}}

                                        <td>
                                            <a href="/transactions/{{$transaksi->id}}/kembali" class="btn btn-sm btn-sign-in">Kembali</a>
                                            <a href="/transactions/{{$transaksi->id}}/perpanjang" class="btn btn-sm btn-danger">Perpanjang</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
