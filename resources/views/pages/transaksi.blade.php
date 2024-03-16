@extends('layout.app')

@section('content')

<div class="container-fluid">
    <h1>Transaksi</h1>
    <div class="card-body">
      <table class="table table-bordered text-center">
      <table id="productsTable" class="table table-hover table-product text-center" style="width:100%">

        <tr>
          <th>No</th>
          <th>Tangal</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
<tbody class="text-center">
        @foreach ($transaksi as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->total }}</td>
                <td>
                    <form action="/transaksi/{{$item->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                </td>
            </tr>
        @endforeach
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <a href="transaksi/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus"></i> Tambah Data</a>
      </div>
      <?php $no = 1; ?>

</tbody>
</table>
</div>
        <!-- /.content -->
        </div>

        <tr>

        @endsection

