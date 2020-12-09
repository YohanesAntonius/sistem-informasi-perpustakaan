
@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Data</h4>
                        {{-- <p class="card-category">Lengkapi data Buku terlebih dahulu</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/books/{{ $books->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="judul" class="bmd-label-floating">Judul</label>
                                        <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid
                                        @enderror" placeholder="Masukkan Judul ..." value="{{$books->judul}}">
                                        @error('judul') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="pengarang" class="bmd-label-floating">Pengarang</label>
                                        <input type="text" id="pengarang" name="pengarang" class="form-control"
                                        value="{{$books->pengarang}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="penerbit" class="bmd-label-floating">Penerbit</label>
                                        <input type="text" id="penerbit" name="penerbit" class="form-control"
                                        value="{{$books->penerbit}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tahun_terbit" class="bmd-label-floating">Tahun Terbit</label>
                                        <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control @error('tahun_terbit')
                                        is-invalid @enderror" placeholder="Masukkan Tahun ..." value="{{$books->tahun_terbit}}">
                                        @error('tahun_terbit') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="isbn" class="bmd-label-floating">Isbn</label>
                                        <input type="text" id="isbn" name="isbn" class="form-control"
                                        value="{{$books->isbn}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="jumlah_buku" class="bmd-label-floating">Jumlah Buku</label>
                                        <input type="number" id="jumlah_buku" name="jumlah_buku" class="form-control"
                                        value="{{$books->jumlah_buku}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="lokasi" class="bmd-label-floating">Lokasi</label>
                                        <input type="teks" id="lokasi" name="lokasi" class="form-control"
                                        value="{{$books->lokasi}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggal_input" class="bmd-label-floating">Tanggal Input</label>
                                        <input type="date" id="tanggal_input" name="tanggal_input" class="form-control"
                                        value="{{$books->tanggal_input}}">
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-primary pull-right">Ubah Data</button>
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
