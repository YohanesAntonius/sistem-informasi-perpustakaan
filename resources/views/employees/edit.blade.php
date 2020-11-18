
@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Data</h4>
                        <p class="card-category">Lengkapi data Anda terlebih dahulu</p>
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
                                        <label for="id_pendidikan_terakhir" class="bmd-label-floating">Pendidikan Terakhir</label>
                                        <input type="text" id="id_pendidikan_terakhir" name="id_pendidikan_terakhir" class="form-control"
                                        value="{{$employees->id_pendidikan_terakhir}}">
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
