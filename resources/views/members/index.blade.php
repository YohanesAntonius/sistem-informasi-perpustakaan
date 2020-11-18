@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Anggota</h4>
                        {{-- <p class="card-category"> Mau data lebih banyak ?</p> --}}
                    <a href="{{ url('/') }}/members/create" class="btn btn-secondary"> Tambah Data</a>
                    <a href="{{ url('/') }}/laporan/laporan_anggota_excel" class="btn btn-secondary"> Export to Excel</a>
                    <a href="{{ url('/') }}/members/" class="btn btn-secondary"> Export To PDF</a>
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
                                            Tempat Lahir
                                        </th>
                                        <th>
                                            Tanggal Lahir
                                        </th>
                                        <th>
                                            Jenis Kelamin
                                        </th>
                                        <th>
                                            Prodi
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $anggota)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{$anggota->nim}} </td>
                                        <td> {{$anggota->nama}} </td>
                                        <td> {{$anggota->tempat_lahir}} </td>
                                        <td> {{$anggota->tanggal_lahir}} </td>
                                        <td> {{$anggota->jenis_kelamin}} </td>
                                        <td> {{$anggota->prodi}} </td>
                                        <td>
                                            <a href="/members/{{$anggota->nim}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/members/{{$anggota->nim}}" class="btn btn-sm btn-danger">Hapus</a>
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
