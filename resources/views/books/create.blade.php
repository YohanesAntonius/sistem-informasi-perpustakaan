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
                        <form method="POST" action="/books">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="judul" class="bmd-label-floating">Judul</label>
                                        <input type="text" id="judul" name="judul" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="pengarang" class="bmd-label-floating">Pengarang</label>
                                        <input type="text" id="pengarang" name="pengarang" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="penerbit" class="bmd-label-floating">Penerbit</label>
                                        <input type="text" id="penerbit" name="penerbit" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tahun_terbit" class="bmd-label-floating">Tahun Terbit</label>
                                        <br>
                                        <select name="tahun_terbit" id="tahun_terbit" class="form-control
                                        @error('tahun_terbit') is-invalid @enderror" placeholder="Masukkan Tahun ...">
                                        <option value="" disabled selected>Pilih Tahun...</option>
                                        <option value="2020" {{ old('tahun_terbit') == "2020" ? 'selected':'' }} >2020</option>
                                        <option value="2019" {{ old('tahun_terbit') == '2019' ? 'selected':'' }} >2019</option>
                                        <option value="2018" {{ old('tahun_terbit') == '2018' ? 'selected':'' }} >2018</option>
                                        <option value="2017" {{ old('tahun_terbit') == '2017' ? 'selected':'' }} >2017</option>
                                        <option value="2016" {{ old('tahun_terbit') == '2016' ? 'selected':'' }} >2016</option>
                                        <option value="2015" {{ old('tahun_terbit') == '2015' ? 'selected':'' }} >2015</option>
                                        <option value="2014" {{ old('tahun_terbit') == '2014' ? 'selected':'' }} >2014</option>
                                        <option value="2013" {{ old('tahun_terbit') == '2013' ? 'selected':'' }} >2013</option>
                                        <option value="2012" {{ old('tahun_terbit') == '2012' ? 'selected':'' }} >2012</option>
                                        <option value="2011" {{ old('tahun_terbit') == '2011' ? 'selected':'' }} >2011</option>
                                        <option value="2010" {{ old('tahun_terbit') == '2010' ? 'selected':'' }} >2010</option>
                                        <option value="2009" {{ old('tahun_terbit') == '2009' ? 'selected':'' }} >2009</option>
                                        <option value="2008" {{ old('tahun_terbit') == '2008' ? 'selected':'' }} >2008</option>
                                        <option value="2007" {{ old('tahun_terbit') == '2007' ? 'selected':'' }} >2007</option>
                                        <option value="2006" {{ old('tahun_terbit') == '2006' ? 'selected':'' }} >2006</option>
                                        <option value="2005" {{ old('tahun_terbit') == '2005' ? 'selected':'' }} >2005</option>
                                        <option value="2004" {{ old('tahun_terbit') == '2004' ? 'selected':'' }} >2004</option>
                                        <option value="2003" {{ old('tahun_terbit') == '2003' ? 'selected':'' }} >2003</option>
                                        <option value="2002" {{ old('tahun_terbit') == '2002' ? 'selected':'' }} >2002</option>
                                        <option value="2001" {{ old('tahun_terbit') == '2001' ? 'selected':'' }} >2001</option>
                                        <option value="2000" {{ old('tahun_terbit') == '2000' ? 'selected':'' }} >2000</option>
                                        <option value="1999" {{ old('tahun_terbit') == '1999' ? 'selected':'' }} >1999</option>
                                        <option value="1998" {{ old('tahun_terbit') == '1998' ? 'selected':'' }} >1998</option>
                                        <option value="1997" {{ old('tahun_terbit') == '1997' ? 'selected':'' }} >1997</option>
                                        <option value="1996" {{ old('tahun_terbit') == '1996' ? 'selected':'' }} >1996</option>
                                        <option value="1995" {{ old('tahun_terbit') == '1995' ? 'selected':'' }} >1995</option>
                                        <option value="1994" {{ old('tahun_terbit') == '1994' ? 'selected':'' }} >1994</option>
                                        <option value="1993" {{ old('tahun_terbit') == '1993' ? 'selected':'' }} >1993</option>
                                        <option value="1992" {{ old('tahun_terbit') == '1992' ? 'selected':'' }} >1992</option>
                                        <option value="1991" {{ old('tahun_terbit') == '1991' ? 'selected':'' }} >1991</option>
                                        <option value="1990" {{ old('tahun_terbit') == '1990' ? 'selected':'' }} >1990</option>
                                    </select>
                                    @error('tahun_terbit') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="isbn" class="bmd-label-floating">Isbn</label>
                                        <input type="text" id="isbn" name="isbn" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="jumlah_buku" class="bmd-label-floating">Jumlah Buku</label>
                                        <input type="number" id="jumlah_buku" name="jumlah_buku" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="lokasi" class="bmd-label-floating">Lokasi</label>
                                        <br>
                                        <select name="lokasi" id="lokasi" class="form-control
                                        @error('lokasi') is-invalid @enderror" placeholder="Masukkan Lokasi Buku ...">
                                        <option value="" disabled selected>Pilih Lokasi Buku...</option>
                                        <option value="Komputer" {{ old('lokasi') == "Komputer" ? 'selected':'' }} >Komputer</option>
                                        <option value="Manajemen" {{ old('lokasi') == 'Manajemen' ? 'selected':'' }} >Manajemen</option>
                                        <option value="Bisnis" {{ old('lokasi') == 'Binis' ? 'selected':'' }} >Bisnis</option>
                                        <option value="Teknologi" {{ old('lokasi') == 'Teknologi' ? 'selected':'' }} >Teknologi</option>
                                        <option value="Masak" {{ old('lokasi') == 'Masak' ? 'selected':'' }} >Masak</option>
                                        <option value="Hukum" {{ old('lokasi') == 'Hukum' ? 'selected':'' }} >Hukum</option>
                                        <option value="Ilmu Komunikasi" {{ old('lokasi') == 'Ilmu Komunikasi' ? 'selected':'' }} >Ilmu Komunikasi</option>
                                    </select>
                                    @error('lokasi') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="tanggal_input" class="bmd-label-floating">Tanggal Input</label>
                                        <br>
                                        <input type="date" id="tanggal_input" name="tanggal_input" class="form-control">
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
