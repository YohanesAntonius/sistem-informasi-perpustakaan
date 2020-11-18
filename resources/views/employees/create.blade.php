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
                        <form method="POST" action="/employees">
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
                                        <label for="alamat" class="bmd-label-floating">Alamat</label>
                                        <input type="text" id="alamat" name="alamat" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="telepon" class="bmd-label-floating">Telepon</label>
                                        <input type="text" id="telepon" name="telepon" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="cellphone" class="bmd-label-floating">No. Hp</label>
                                        <input type="text" id="cellphone" name="cellphone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="agama" class="bmd-label-floating">Agama</label>
                                        <br>
                                        <select name="agama" id="agama" class="form-control
                                        @error('agama') is-invalid @enderror" placeholder="Masukkan Agama ...">
                                        <option value="" disabled selected>Pilih Agama...</option>
                                        <option value="Islam" {{ old('agama') == "Islam" ? 'selected':'' }} >Islam</option>
                                        <option value="Protestan" {{ old('agama') == 'Protestan' ? 'selected':'' }} >Protestan</option>
                                        <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected':'' }} >Katolik</option>
                                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected':'' }} >Hindu</option>
                                        <option value="Budha" {{ old('agama') == 'Budha' ? 'selected':'' }} >Budha</option>
                                        <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected':'' }} >Konghucu</option>
                                    </select>
                                    @error('agama') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
                                        <label for="id_pendidikan_terakhir" class="bmd-label-floating">Pendidikan Terakhir</label>
                                        <br>
                                        <select name="id_pendidikan_terakhir" id="id_pendidikan_terakhir" class="form-control
                                        @error('id_pendidikan_terakhir') is-invalid @enderror" placeholder="Masukkan Pendidikan ...">
                                        <option value="" disabled selected>Pilih Pendidikan...</option>
                                        <option value="1" {{ old('id_pendidikan_terakhir') == '1' ? 'selected':'' }} >SD</option>
                                        <option value="2" {{ old('id_pendidikan_terakhir') == '2' ? 'selected':'' }} >SMP</option>
                                        <option value="3" {{ old('id_pendidikan_terakhir') == '3' ? 'selected':'' }} >SMA/SMK</option>
                                        <option value="4" {{ old('id_pendidikan_terakhir') == '4' ? 'selected':'' }} >S1</option>
                                        <option value="5" {{ old('id_pendidikan_terakhir') == '5' ? 'selected':'' }} >S2</option>
                                        <option value="6" {{ old('id_pendidikan_terakhir') == '6' ? 'selected':'' }} >S3</option>
                                        <option value="7" {{ old('id_pendidikan_terakhir') == '7' ? 'selected':'' }} >Tidak Sekolah</option>
                                    </select>
                                    @error('id_pendidikan_terakhir') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="aktif" class="bmd-label-floating">Aktif</label>
                                        <br><br>
                                        <input type="radio" id="aktif" name="aktif"
                                        <?php if (isset($aktif) && $aktif=="Y") echo "checked";?> value="Y">Y
                                        <?php echo "&nbsp"; echo "&nbsp";?>
                                        <input type="radio" id="aktif" name="aktif"
                                        <?php if (isset($aktif) && $aktif=="T") echo "checked";?> value="T">T
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="username" class="bmd-label-floating">Username</label>
                                        <input type="text" id="username" name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="password" class="bmd-label-floating">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
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
