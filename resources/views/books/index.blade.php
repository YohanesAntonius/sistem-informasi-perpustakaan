
@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Buku</h4>
                        {{-- <p class="card-category"> Mau data lebih banyak ?</p> --}}
                    <a href="{{ url('/') }}/books/create" class="btn btn-secondary"> Tambah Data</a>
                    <a href="{{ url('/') }}/books/export" class="btn btn-secondary"> Export To Excel</a>
                    {{-- <a href="{{ url('/') }}/books/" class="btn btn-secondary"> Export To PDF</a> --}}
                    </div>
                    @if (session('pesan'))
                        <div class="alert alert-info">
                            <b>Sukses</b>:{{session('pesan')}}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class= "table table-striped" id="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Pengarang
                                        </th>
                                        <th>
                                            Penerbit
                                        </th>
                                        <th>
                                            Tahun Terbit
                                        </th>
                                        <th>
                                            Isbn
                                        </th>
                                        <th>
                                            Jumlah Buku
                                        </th>
                                        <th>
                                            Lokasi
                                        </th>
                                        <th>
                                            Tanggal Input
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $buku)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{$buku->judul}} </td>
                                        <td> {{$buku->pengarang}} </td>
                                        <td> {{$buku->penerbit}} </td>
                                        <td> {{$buku->tahun_terbit}} </td>
                                        <td> {{$buku->isbn}} </td>
                                        <td> {{$buku->jumlah_buku}} </td>
                                        <td> {{$buku->lokasi}} </td>
                                        <td> {{$buku->tanggal_input}} </td>
                                        <td>
                                            <a href="/books/{{$buku->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/books/{{$buku->id}}" class="btn btn-sm btn-danger">Hapus</a>
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
