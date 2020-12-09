
@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Data</h4>
                        {{-- <p class="card-category">Lengkapi data Anda terlebih dahulu</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/members/{{ $members->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nim" class="bmd-label-floating">Nim</label>
                                        <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid
                                        @enderror" placeholder="Masukkan Nim ..." value="{{$members->nim}}">
                                        @error('nim') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nama" class="bmd-label-floating">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control"
                                        value="{{$members->nama}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tempat_lahir" class="bmd-label-floating">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
                                        value="{{$members->tempat_lahir}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggal_lahir" class="bmd-label-floating">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control @error('tanggal_lahir')
                                        is-invalid @enderror" placeholder="Masukkan Tanggal Lahir ..." value="{{$members->tanggal_lahir}}">
                                        @error('tanggal_lahir') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="jenis_kelamin" class="bmd-label-floating">Jenis Kelamin</label>
                                        <br>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin')
                                        is-invalid @enderror" value="{{$members->jenis_kelamin}}">
                                        <option value="" disabled selected>Pilih Kelamin</option>
                                        <option value="Laki - laki" {{ old('jenis_kelamin', $members->jenis_kelamin) == "Laki - laki" ? 'selected':'' }} >Laki - laki</option>
                                        <option value="Wanita" {{ old('jenis_kelamin', $members->jenis_kelamin) == 'Wanita' ? 'selected':'' }} >Wanita</option>
                                        </select>
                                        @error('jenis_kelamin') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="prodi" class="bmd-label-floating">Prodi</label>
                                        <input type="text" id="prodi" name="prodi" class="form-control"
                                        value="{{$members->prodi}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="email" class="bmd-label-floating">Email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="password" class="bmd-label-floating">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                </div>
                            <button type="submit" class="btn btn-primary pull-right">Ubah Data</button>
                            <button type="cancel" class="btn btn-secondary pull-right">Cancel</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
