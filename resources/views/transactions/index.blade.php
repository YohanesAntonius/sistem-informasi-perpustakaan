@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.main')

@section('container')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Data Peminjaman Buku Perpusatakaan</h4>
                        {{-- <p class="card-category"> Mau data lebih banyak ?</p> --}}
                    <a href="{{ url('/') }}/transactions/create" class="btn btn-secondary"> Tambah Data</a>
                    <a href="{{ url('/') }}/transactions/" class="btn btn-secondary"> Export to Excel</a>
                    {{-- <a href="{{ url('/') }}/transactions/" class="btn btn-secondary"> Export To PDF</a> --}}
                    </div>
                    @if (session('pesan'))
                        <div class="alert alert-info">
                            <b>Sukses</b>:{{session('pesan')}}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Kode
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Judul
                                        </th>
                                        <th>
                                            Tanggal Pinjam
                                        </th>
                                        <th>
                                            Tanggal Kembali
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($datas as $data)
                                    <tr>
                                        {{-- <td> {{ $loop->iteration }}</td> --}}
                                        <td> {{$data->kode_transaksi}} </td>
                                        <td> {{$data->members_id}} </td>
                                        <td> {{$data->books_id}} </td>
                                        <td> {{date('d/m/y', strtotime($data->tanggal_pinjam))}} </td>
                                        <td> {{date('d/m/y', strtotime($data->tanggal_kembali))}}</td>
                                        <td>
                                          @if($data->status == 'pinjam')
                                            <label class="badge badge-warning">Pinjam</label>
                                          @else
                                            <label class="badge badge-success">Kembali</label>
                                          @endif</td>
                                          <td>
                                            <a href="/transactions/{{$data->id}}/kembali" class="btn btn-sm btn-success">Kembali</a>
                                            <a href="/transactions/{{$data->id}}" class="btn btn-sm btn-danger">Hapus</a>
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
