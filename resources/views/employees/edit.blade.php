
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
                        <form method="POST" action="/employees/{{ $employees->id }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nim" class="bmd-label-floating">Nim</label>
                                        <input type="text" id="nim" name="nim" class="form-control"
                                        value="{{$employees->nim}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="nama" class="bmd-label-floating">Nama</label>
                                        <input type="text" id="nama" name="nama" class="form-control"
                                        value="{{$employees->nama}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="alamat" class="bmd-label-floating">Alamat</label>
                                        <input type="text" id="alamat" name="alamat" class="form-control"
                                        value="{{$employees->alamat}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="telepon" class="bmd-label-floating">Telepon</label>
                                        <input type="text" id="telepon" name="telepon" class="form-control"
                                        value="{{$employees->telepon}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="cellphone" class="bmd-label-floating">No. Hp</label>
                                        <input type="text" id="cellphone" name="cellphone" class="form-control"
                                        value="{{$employees->cellphone}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="agama" class="bmd-label-floating">Agama</label>
                                        <input type="text" id="agama" name="agama" class="form-control"
                                        value="{{$employees->agama}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="email" class="bmd-label-floating">Email</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                        value="{{$employees->email}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="pendidikan_id" class="bmd-label-floating">Pendidikan Terakhir</label>
                                        <br>
                                        <select name="pendidikan_id" id="pendidikan_id" value="{{$employees->pendidikan_id}}"
                                        class="form-control @error('pendidikan_id') is-invalid @enderror"
                                        placeholder="Masukkan Pendidikan ...">
                                        <option value="" disabled selected></option>
                                        <option value="1" {{ old('pendidikan_id') == '1' ? 'selected':'' }} >SD</option>
                                        <option value="2" {{ old('pendidikan_id') == '2' ? 'selected':'' }} >SMP</option>
                                        <option value="3" {{ old('pendidikan_id') == '3' ? 'selected':'' }} >SMA/SMK</option>
                                        <option value="4" {{ old('pendidikan_id') == '4' ? 'selected':'' }} >S1</option>
                                        <option value="5" {{ old('pendidikan_id') == '5' ? 'selected':'' }} >S2</option>
                                        <option value="6" {{ old('pendidikan_id') == '6' ? 'selected':'' }} >S3</option>
                                        <option value="7" {{ old('pendidikan_id') == '7' ? 'selected':'' }} >Tidak Sekolah</option>
                                    </select>
                                    @error('pendidikan_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="aktif" class="bmd-label-floating">Aktif</label>
                                        <input type="text" id="aktif" name="aktif" class="form-control"
                                        value="{{$employees->aktif}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="username" class="bmd-label-floating">Username</label>
                                        <input type="text" id="username" name="username" class="form-control"
                                        value="{{$employees->username}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="password" class="bmd-label-floating">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                        value="{{$employees->password}}">
                                    </div>
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
