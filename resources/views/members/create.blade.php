@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Data</h4>
                        {{-- <p class="card-category">Lengkapi data Anda terlebih dahulu</p> --}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/members">
                            @csrf
                            <div class="row">
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
                                        <label for="tempat_lahir" class="bmd-label-floating">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggal_lahir" class="bmd-label-floating">Tanggal Lahir</label>
                                        <br>
                                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control
                                        @error('tanggal_lahir') is-invalid @enderror" placeholder="Masukkan Tanggal Lahir ..." value="{{ old('tanggal_lahir') }}">
                                        @error('tanggal_lahir') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="jenis_kelamin" class="bmd-label-floating">Jenis Kelamin</label>
                                        <br>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control
                                        @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="" disabled selected>Pilih Kelamin</option>
                                <option value="Laki - laki" {{ old('jenis_kelamin') == "Laki - laki" ? 'selected':'' }} >Laki - laki</option>
                                <option value="Wanita" {{ old('jenis_kelamin') == 'Wanita' ? 'selected':'' }} >Wanita</option>
                            </select>
                            @error('jenis_kelamin') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="prodi" class="bmd-label-floating">Prodi</label>
                                        <br>
                                        <select name="prodi" id="prodi" class="form-control
                                        @error('prodi') is-invalid @enderror" placeholder="Masukkan Prodi ...">
                                        <option value="" disabled selected>Pilih Prodi...</option>
                                        <option value="Teknk Informatika" {{ old('prodi') == "Teknk Informatika" ? 'selected':'' }} >Teknk Informatika</option>
                                        <option value="Teknik Sipil" {{ old('prodi') == 'Teknik Sipil' ? 'selected':'' }} >Teknik Sipil</option>
                                        <option value="Teknik Elektro" {{ old('prodi') == 'Teknik Elektro' ? 'selected':'' }} >Teknik Elektro</option>
                                        <option value="Ekonomi Manajemen" {{ old('prodi') == 'Ekonomi Manajemen' ? 'selected':'' }} >Ekonomi Manajemen</option>
                                        <option value="Ekonomi Akuntansi" {{ old('prodi') == 'Ekonomi Akuntansi' ? 'selected':'' }} >Ekonomi Akuntansi</option>
                                        <option value="Ilmu Ekonomi dan Pembangunan" {{ old('prodi') == 'Ilmu Ekonomi dan Pembangunan' ? 'selected':'' }} >Ilmu Ekonomi dan Pembangunan</option>
                                        <option value="Fisip Ilmu Komunikasi" {{ old('prodi') == 'Fisip Ilmu Komunikasi' ? 'selected':'' }} >Fisip Ilmu Komunikasi</option>
                                        <option value="Fisip Admin Publik" {{ old('prodi') == 'Fisip Admin Publik' ? 'selected':'' }} >Fisip Admin Publik</option>
                                        <option value="Ilmu Hukum" {{ old('prodi') == 'Ilmu Hukum' ? 'selected':'' }} >Ilmu Hukum</option>
                                    </select>
                                    @error('prodi') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
