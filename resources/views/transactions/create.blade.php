@section('js')
 <script type="text/javascript">
                $(document).on('click', '.pilih', function (e) {
                document.getElementById("members_id").value = $(this).attr('data-members_id');
                document.getElementById("members_nama").value = $(this).attr('data-members_nama');
                $('#myModal').modal('hide');
            });

                $(document).on('click', '.pilih_books', function (e) {
                document.getElementById("books_judul").value = $(this).attr('data-books_judul');
                document.getElementById("books_id").value = $(this).attr('data-books_id');
                $('#myModal2').modal('hide');
            });


             $(function () {
                $("#lookup, #lookup2").dataTable();
            });

        </script>

@stop
@section('css')

@extends('layouts.main')

@section('container')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                                    <div class="form-group bmd-form-group{{$errors->has('kode_transaksi') ? ' has-error' : '' }}">
                                        <label for="kode_transaksi" class="bmd-label-floating">Kode Transaksi</label>
                                        <br><br>
                                        <div class="input group">
                                            <input id="kode_transaksi" type="text" name="kode_transaksi"
                                                value="{{$kode}}" required readonly="">
                                            @if ($errors->has('kode_transaksi'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('kode_transaksi') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div><br><br>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="members_id" class="bmd-label-floating">Nama Peminjam</label>
                                        <br>
                                        <select name="members_id" id="members_id" class="form-control
                                        @error('members_id') is-invalid @enderror" placeholder="Masukkan Peminjam ...">
                                        <option value="" disabled selected></option>
                                        <option value="1" {{ old('members_id') == "1" ? 'selected':'' }} >1714321000_M Zyahed</option>
                                        <option value="2" {{ old('members_id') == '2' ? 'selected':'' }} >1714321001_A Abu Nidhal</option>
                                        <option value="3" {{ old('members_id') == '3' ? 'selected':'' }} >1714321002_Achmad Fahrudin</option>
                                        <option value="4" {{ old('members_id') == '4' ? 'selected':'' }} >1714321003_Aang Mura</option>
                                        <option value="5" {{ old('members_id') == '5' ? 'selected':'' }} >1714321004_Rony Wahyu</option>
                                        <option value="6" {{ old('members_id') == '6' ? 'selected':'' }} >1714321005_Achmad Sofyan</option>
                                        <option value="7" {{ old('members_id') == '7' ? 'selected':'' }} >1714321006_Achmad Vidi S</option>
                                        <option value="8" {{ old('members_id') == '8' ? 'selected':'' }} >1714321007_Achmad Syauqi</option>
                                        <option value="9" {{ old('members_id') == '9' ? 'selected':'' }} >1714321008_Achmad Zakinur Arif</option>
                                        <option value="10" {{ old('members_id') == '10' ? 'selected':'' }} >1714321009_Ade Hermawanto</option>
                                        <option value="11" {{ old('members_id') == '11' ? 'selected':'' }} >1714321010_Agung Dwi Kresna</option>
                                        <option value="12" {{ old('members_id') == '12' ? 'selected':'' }} >1714321011_Ade Rakhmawan</option>
                                        <option value="13" {{ old('members_id') == '13' ? 'selected':'' }} >1714321012_Agus Wahyudi</option>
                                        <option value="14" {{ old('members_id') == '14' ? 'selected':'' }} >1714321013_Ahmad Agus Rudianto</option>
                                        <option value="15" {{ old('members_id') == '15' ? 'selected':'' }} >1714321014_Ahmad Rijal J</option>
                                        <option value="16" {{ old('members_id') == '16' ? 'selected':'' }} >1714321015_Ahmad Fikri Adam</option>
                                        <option value="17" {{ old('members_id') == '17' ? 'selected':'' }} >1714321016_Ahmad Zaki Zakariyah</option>
                                        <option value="18" {{ old('members_id') == '18' ? 'selected':'' }} >1714321017_Andi As Rifaldo</option>
                                        <option value="19" {{ old('members_id') == '19' ? 'selected':'' }} >1714321018_Andik Rahmad</option>
                                        <option value="20" {{ old('members_id') == '20' ? 'selected':'' }} >1714321020_Andi Prasetyo M</option>
                                        <option value="21" {{ old('members_id') == '21' ? 'selected':'' }} >1714321021_Andika Wahyuono P</option>
                                        <option value="22" {{ old('members_id') == '22' ? 'selected':'' }} >1714321022_Andini Eka Tri Putriani</option>
                                        <option value="23" {{ old('members_id') == '23' ? 'selected':'' }} >1714321023_Andy Dharmawan</option>
                                        <option value="24" {{ old('members_id') == '24' ? 'selected':'' }} >1714321024_Andrianus Koly</option>
                                        <option value="25" {{ old('members_id') == '25' ? 'selected':'' }} >1714321025_Angga Indrayanto</option>
                                        <option value="26" {{ old('members_id') == '26' ? 'selected':'' }} >1714321026_Ar Rohmah Puji Rahayu</option>
                                        <option value="27" {{ old('members_id') == '27' ? 'selected':'' }} >1714321027_Arif Kurnia Putra</option>
                                        <option value="28" {{ old('members_id') == '28' ? 'selected':'' }} >1714321028_Ari Setiawan</option>
                                        <option value="29" {{ old('members_id') == '29' ? 'selected':'' }} >1714321029_Arik Eka Yulianto</option>
                                        <option value="30" {{ old('members_id') == '30' ? 'selected':'' }} >1714321030_Arindra Wirawan</option>
                                        <option value="31" {{ old('members_id') == '31' ? 'selected':'' }} >1714321031_Ayatulloh Firmansyah</option>
                                        <option value="32" {{ old('members_id') == '32' ? 'selected':'' }} >1714321032_Ariyadi</option>
                                        <option value="33" {{ old('members_id') == '33' ? 'selected':'' }} >1714321033_Astin Syafriansyaji</option>
                                        <option value="34" {{ old('members_id') == '34' ? 'selected':'' }} >1714321034_Bagus Sanjaya</option>
                                        <option value="35" {{ old('members_id') == '35' ? 'selected':'' }} >1714321035_Bima Apriliasta Eka</option>
                                        <option value="36" {{ old('members_id') == '36' ? 'selected':'' }} >1714321036_Bagus Yogo Pribadi</option>
                                        <option value="37" {{ old('members_id') == '37' ? 'selected':'' }} >1714321037_Bimo Ari Susilo</option>
                                        <option value="38" {{ old('members_id') == '38' ? 'selected':'' }} >1714321038_Burhani</option>
                                        <option value="39" {{ old('members_id') == '39' ? 'selected':'' }} >1714321039_Bintang Pamungkas</option>
                                        <option value="40" {{ old('members_id') == '40' ? 'selected':'' }} >1714321040_Choirun Nisa</option>
                                        <option value="41" {{ old('members_id') == '41' ? 'selected':'' }} >1714321041_Dana Prasetyo</option>
                                        <option value="42" {{ old('members_id') == '42' ? 'selected':'' }} >1714321042_Dewi Nur Afifah</option>
                                        <option value="43" {{ old('members_id') == '43' ? 'selected':'' }} >1714321043_Denny Permana Putra</option>
                                        <option value="44" {{ old('members_id') == '44' ? 'selected':'' }} >1714321044_Dika Muhammad</option>
                                        <option value="45" {{ old('members_id') == '45' ? 'selected':'' }} >1714321045_Dimas Aditya Pratama</option>
                                        <option value="46" {{ old('members_id') == '46' ? 'selected':'' }} >1714321046_Dimas Gilang Ramadhan</option>
                                        <option value="47" {{ old('members_id') == '47' ? 'selected':'' }} >1714321047_Dimas Bagus P</option>
                                        <option value="48" {{ old('members_id') == '48' ? 'selected':'' }} >1714321048_Dimas Permadianto</option>
                                        <option value="49" {{ old('members_id') == '49' ? 'selected':'' }} >1714321049_Doni Kurniawan</option>
                                        <option value="50" {{ old('members_id') == '50' ? 'selected':'' }} >1714321050_Dwi Triyanto</option>
                                    </select>
                                    @error('members_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="books_id" class="bmd-label-floating">Judul</label>
                                        <br>
                                        <select name="books_id" id="books_id" class="form-control
                                        @error('books_id') is-invalid @enderror" placeholder="Masukkan Buku ...">
                                        <option value="" disabled selected></option>
                                        <option value="1" {{ old('books_id') == "1" ? 'selected':'' }} >Belajar Laravel 8.0</option>
                                        <option value="2" {{ old('books_id') == '2' ? 'selected':'' }} >Customer Relationship Management (CRM)</option>
                                        <option value="3" {{ old('books_id') == '3' ? 'selected':'' }} >Edukasi bahasa inggris</option>
                                        <option value="4" {{ old('books_id') == '4' ? 'selected':'' }} >Management Keuangan</option>
                                        <option value="5" {{ old('books_id') == '5' ? 'selected':'' }} >Data Science</option>
                                        <option value="6" {{ old('books_id') == '6' ? 'selected':'' }} >Php & Laravel</option>
                                        <option value="7" {{ old('books_id') == '7' ? 'selected':'' }} >Matlab untuk pemrosesan Citra Digital</option>
                                        <option value="8" {{ old('books_id') == '8' ? 'selected':'' }} >Filosofi Bahasa</option>
                                        <option value="9" {{ old('books_id') == '9' ? 'selected':'' }} >Membangun bisnis di era pandemi</option>
                                        <option value="10" {{ old('books_id') == '10' ? 'selected':'' }} >Management Keuangan</option>
                                        <option value="11" {{ old('books_id') == '11' ? 'selected':'' }} >Jika kamu menjadi tanda tambah</option>
                                        <option value="12" {{ old('books_id') == '12' ? 'selected':'' }} >Pierre</option>
                                        <option value="13" {{ old('books_id') == '13' ? 'selected':'' }} >Buku pintar pengetahuan umum</option>
                                        <option value="14" {{ old('books_id') == '14' ? 'selected':'' }} >Membaca pikiran orang lewat bahasa tubuh</option>
                                        <option value="15" {{ old('books_id') == '15' ? 'selected':'' }} >Mikrotik</option>
                                        <option value="16" {{ old('books_id') == '16' ? 'selected':'' }} >30 Menit Mahir Membuat Jaringan Komputer</option>
                                        <option value="17" {{ old('books_id') == '17' ? 'selected':'' }} >Bongkar Rahasia Openbts</option>
                                        <option value="18" {{ old('books_id') == '18' ? 'selected':'' }} >Jaringan MESH</option>
                                        <option value="19" {{ old('books_id') == '19' ? 'selected':'' }} >Buat Website dengan tapestry</option>
                                        <option value="20" {{ old('books_id') == '20' ? 'selected':'' }} >Koleksi Lengkap Software Hacking</option>
                                        <option value="21" {{ old('books_id') == '21' ? 'selected':'' }} >Kupas Tuntas Tool Gratis Proteksi Windows</option>
                                        <option value="22" {{ old('books_id') == '22' ? 'selected':'' }} >Linux Networking Ubuntu Debian</option>
                                        <option value="23" {{ old('books_id') == '23' ? 'selected':'' }} >Membangun Jaringan Komputer Di Windows XP</option>
                                        <option value="24" {{ old('books_id') == '24' ? 'selected':'' }} >Membuat Sendiri Jaringan Komputer</option>
                                        <option value="25" {{ old('books_id') == '25' ? 'selected':'' }} >Rangkaian Listrik</option>
                                        <option value="26" {{ old('books_id') == '26' ? 'selected':'' }} >Tips & Trik Mikrotik Router OS</option>
                                        <option value="27" {{ old('books_id') == '27' ? 'selected':'' }} >Administrasi Jaringan Linux UBUNTU 11</option>
                                        <option value="28" {{ old('books_id') == '28' ? 'selected':'' }} >Algoritma & Pemograman Menggunakan Java</option>
                                        <option value="29" {{ old('books_id') == '29' ? 'selected':'' }} >Algoritma & Pemrograman Menggunakan C & C++</option>
                                        <option value="30" {{ old('books_id') == '30' ? 'selected':'' }} >Belajar Kilat: Computer Networking</option>
                                        <option value="31" {{ old('books_id') == '31' ? 'selected':'' }} >Cybertron Solution</option>
                                        <option value="32" {{ old('books_id') == '32' ? 'selected':'' }} >Kriptografi Untuk Keamanan Jaringan</option>
                                        <option value="33" {{ old('books_id') == '33' ? 'selected':'' }} >Membuat Sendiri CCTV Berkelas Enterprise</option>
                                        <option value="34" {{ old('books_id') == '34' ? 'selected':'' }} >Membuat Sendiri Cloud Computing Server</option>
                                        <option value="35" {{ old('books_id') == '35' ? 'selected':'' }} >Mengubah Windows7 Menjadi Linux</option>
                                        <option value="36" {{ old('books_id') == '36' ? 'selected':'' }} >Network Hacking Dengan Linux Backtrack</option>
                                        <option value="37" {{ old('books_id') == '37' ? 'selected':'' }} >Panduan Aplikatif Dan Solusi Bikin Animasi</option>
                                        <option value="38" {{ old('books_id') == '38' ? 'selected':'' }} >Bisnis ikan lele</option>
                                        <option value="39" {{ old('books_id') == '39' ? 'selected':'' }} >Bisnis ikan Nila</option>
                                        <option value="40" {{ old('books_id') == '40' ? 'selected':'' }} >Membaca huruf braille</option>
                                        <option value="41" {{ old('books_id') == '41' ? 'selected':'' }} >Finance</option>
                                        <option value="42" {{ old('books_id') == '42' ? 'selected':'' }} >Membuat Bakmie</option>
                                        <option value="43" {{ old('books_id') == '43' ? 'selected':'' }} >Belajar Code Igniter</option>
                                        <option value="44" {{ old('books_id') == '44' ? 'selected':'' }} >Belajar Django</option>
                                        <option value="45" {{ old('books_id') == '45' ? 'selected':'' }} >Edukasi jawa</option>
                                        <option value="46" {{ old('books_id') == '46' ? 'selected':'' }} >Belajar bahasa Jerman</option>
                                        <option value="47" {{ old('books_id') == '47' ? 'selected':'' }} >Hukum Ketatanegaraan</option>
                                        <option value="48" {{ old('books_id') == '48' ? 'selected':'' }} >Bisnis membuat pupuk</option>
                                        <option value="49" {{ old('books_id') == '49' ? 'selected':'' }} >Belajar Html</option>
                                        <option value="50" {{ old('books_id') == '50' ? 'selected':'' }} >Install Ulang WIndows 8</option>
                                    </select>
                                    @error('books_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group{{ $errors->has('tanggal_pinjam') ? ' has-error' : '' }}">
                                        <label for="tanggal_pinjam" class="bmd-label-floating">Tanggal Pinjam</label>
                                        <br>
                                        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" class="form-control"
                                        value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->toDateString())) }}"
                                        required @if(Auth::user()->role == 'anggota') readonly @endif>
                                    @if ($errors->has('tanggal_pinjam'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_pinjam') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group{{ $errors->has('tanggal_kembali') ? ' has-error' : '' }}">
                                        <label for="tanggal_kembali" class="bmd-label-floating">Tanggal Kembali</label>
                                        <br>
                                        <input type="date" id="tanggal_kembali" name="tanggal_kembali" class="form-control"
                                        value="{{ date('Y-m-d', strtotime(Carbon\Carbon::today()->addDays(3)->toDateString())) }}"
                                        required="" @if(Auth::user()->role == 'anggota') readonly @endif>
                                    @if ($errors->has('tanggal_kembali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tanggal_kembali') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="status" class="bmd-label-floating">Status</label>
                                        <br>
                                        <select name="status" id="status" class="form-control
                                        @error('status') is-invalid @enderror">
                                        <option value="Pinjam" {{ old('status') == "Pinjam" ? 'selected':'' }} >Pinjam</option>
                                        </select>
                                    @error('status') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
