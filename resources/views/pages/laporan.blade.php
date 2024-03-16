@extends('layout.app')
@section('content')
<h2>Laporan</h2>
<div class="box box-primary">
    <div class="box-header">
        <div class="box-title">Daftar Laporan</div>
        <div class="box-tools pull-right">
          <a href="laporan/create" class="btn btn-primary">Tambah data</a>
            <form method="POST" action="">
                @csrf
                {{-- <button type="submit" class="btn btn-sm btn-primary">Cetak</button> --}}
        </div>
    </div>
    <div class="box-body table table-responsive">

        </form>
        <table class="table table-hover text-center">
            <tr>
                <th>No</th>
                <th>Kasir</th>
                <th>Tanggal</th>
                <th>Pemasukan</th>
            </tr>

           @foreach ($laporans as $item)
               <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>fiana</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->pemasukan}}</td>
               </tr>
           @endforeach


        </table>
    </div>
</div>
@endsection
