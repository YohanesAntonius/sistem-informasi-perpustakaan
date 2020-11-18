@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Peminjaman Buku</h4>
                        {{-- <p class="card-category">Lengkapi data Anda terlebih dahulu</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/transactions">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="id_books" class="bmd-label-floating">Judul</label>
                                        <input type="id_books" id="id_books" name="id_books" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nim" class="bmd-label-floating">Nim</label>
                                        <input type="text" id="nim" name="nim" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nama" class="bmd-label-floating">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggal_pinjam" class="bmd-label-floating">Tanggal Pinjam</label>
                                        <br>
                                        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggal_kembali" class="bmd-label-floating">Tanggal Kembali</label>
                                        <br>
                                        <input type="date" id="tanggal_kembali" name="tanggal_kembali" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="status" class="bmd-label-floating">Status</label>
                                        <br>
                                        <input type="text" id="status" name="status" class="form-control">
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                            <button type="cancel" class="btn btn-secondary pull-right">Batal</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
