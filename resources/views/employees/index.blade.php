@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Pegawai</h4>
                        {{-- <p class="card-category"> Mau data lebih banyak ?</p> --}}
                    <a href="{{ url('/') }}/employees/create" class="btn btn-secondary"> Tambah Data</a>
                    {{-- <a href="{{ url('/') }}/employees/" class="btn btn-secondary"> Export To Excel</a>
                    <a href="{{ url('/') }}/employees/" class="btn btn-secondary"> Export To PDF</a> --}}
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
                                            Nim
                                        </th>
                                        <th>
                                            Nama Lengkap
                                        </th>
                                        <th>
                                            Aktif
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $pegawai)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{$pegawai->nim}} </td>
                                        <td> {{$pegawai->nama}} </td>
                                        <td> {{$pegawai->aktif}} </td>
                                        <td> {{$pegawai->username}} </td>
                                        <td>
                                            <a href="/employees/{{$pegawai->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/employees/{{$pegawai->id}}" class="btn btn-sm btn-danger">Hapus</a>
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
