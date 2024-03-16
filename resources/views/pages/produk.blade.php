

@extends('layout.app')

@section('content')


                {{-- <!-- Table Product -->
                <div class="row">
                  <div class="col-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h2>Produk</h2>
                        <div class="dropdown">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </div> --}}

                      <div class="container-fluid">
                        <div class="col-4 offset-4 border border-danger">
                          <div class="card card-default">
                            <div class="card-header border border-primary">
                              <h2>Produk</h2>
                              <a href="produk/create" class="btn btn-primary align-end">Tambah Data</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">

                        <table id="productsTable" class="table table-hover table-product text-center" style="width:215%">

                          <thead>

                            <tr>
                              <div></div>
                              <!-- <th>Gambar Produk</th> -->
                              <th>kode</th>
                              <th>nama</th>
                              <th>Harga</th>
                              <th>Stok</th>
                              <th>Aksi</th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($produk as $item)
                                <tr>
                                <td>{{$item->kode}}</td>
                                <td>{{$item->nama}}</td>
                                <td>Rp. {{number_format($item->harga)}}</td>
                                <td>{{$item->stok}}</td>
                                <td>
                                  <form action="/produk/{{$item->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>|

                                    <a href="{{ url('/produk/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                  </form>


                                </td>
                                </tr>
                            @endforeach
                          </tbody>


</div>
                @endsection
