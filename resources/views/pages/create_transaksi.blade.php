<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-6">

      <div class="card">
          <div class="card-header">
              <div class="card-title text-center">
                  <h4>Keranjang Order</h4>
              </div>
          </div>

              <div class=" row mt-1">
                <div class="col-md-4">
                  <label for="">Kode produk</label>
                </div>
                <div class="col-md-8">
                  <form method="GET">
                    <div class="d-flex">
                      <select name="id" class="form-control mr-2" id="">
                        <option value="{{ isset($dataBarang) ? $dataBarang->nama : 'Nama Produk' }}">---</option>
                        @foreach ($barangs as $barang)
                        <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                        @endforeach
                      </select>
                      <button type="submit" class="btn btn-primary">Pilih</button>
                    </div>
                  </form>
                </div>
              </div>

             <form action="/transaksi/detail/create" method="POST">
              @csrf

              <input type="hidden" name="transaksi_id" value="{{ Request::segment(2) }}" required>
              <input type="hidden" name="barang_id" value="{{ isset($dataBarang) ? $dataBarang->id : '' }}" required>
              <input type="hidden" name="nama_barang" value="{{ isset($dataBarang) ? $dataBarang->nama : '' }}" required>
              <input type="hidden" name="harga" value="{{ isset($dataBarang) ? $dataBarang->harga : '' }}" required>
              <input type="hidden" name="subtotal" value='0' required>


              <div class=" row mt-1">
                <div class="col-md-4">
                  <label for="">Nama Barang</label>
                </div>
                <div class="col-md-8">
                  <input type="text" value="{{ isset($dataBarang) ? $dataBarang->nama : '' }}" disabled class="form-control" name="nama">
                </div>
              </div>

              <div class=" row mt-1">
                <div class="col-md-4">
                  <label for="">Harga Satuan</label>
                </div>
                <div class="col-md-8">

                  <input type="number " value="{{ isset($dataBarang) ? number_format($dataBarang->harga) : '' }}" disabled class="form-control" name="harga">
                </div>
              </div>

              <div class="row mt-1">
                <div class="col-md-4">
                  <label for="">Jumlah</label>
                </div>
                <div class="col-md-8">
                  <div class="d-flex">
                    <input type="number" class="form-control text-center mx-1" name="qty" id="qty" value="{{ request('qty') }}" required>
                  </div>
                </div>
              </div>

              <div class="row mt-1">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                  {{-- <h5>{{ $subtotal }}</h5> --}}
                </div>
              </div>

              <div class="row mt-1">
                <div class="col-md-4">

                </div>
                <div class="col-md-8">
                  <a href="{{ route('transaksi.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i>
                    Kembali</a>
                    <button type="submit" class="btn btn-primary"> Tambah <i class="fas fa-arrow-right"></i></button>
                </div>
              </div>

            </form>
            </div>
          </div>
        </div>

      {{-- </div> --}}

      {{-- <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>#</th>
              </tr>
              <tr>
                <td>1</td>
                <td>ciblak</td>
                <td>4</td>
                <td>
                  <a href=""><i class="fas fa-times"></i></a>
              </tr>
            </table>
            <a href="" class="btn btn-success"><i class="fas fa-check"></i> Selesai </a>
          </div>
        </div>
      </div> --}}

      <form action="/transaksi/detail/kirim" method="POST">
        @csrf

      <div class="col-6">

        <div class="card">
            <div class="card-header">
                <div class="card-title text-center">
                    <h4>Transaksi</h4>
                </div>
            </div>

            <div class="card-body">
                <table class="table text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama barang</th>
                            <th>Harga</th>
                            <th>QTY</th>
                            <th>Subtotal</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($transaksidetail as $item)
                       <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ number_format($item->harga) }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ number_format($item->harga * $item->qty) }}</td>
                        <td class="">
                            <a href="/transaksi/detail/delete?id={{ $item->id }}" class="btn btn-danger">
                                <i class="bi bi-trash3-fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                    </svg>
                                </i>
                            </a>
                        </td>
                    </tr>
                       @endforeach
                    </tbody>
                </table>


                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                        </svg>
                    </i>
                    Selesai
                </button>
            </form>
            </div>
        </div>
      </div>

      <form action="" method="GET">
    <div class="row p-2">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">

            <input type="hidden" name="transaksi_id" value="{{ Request::segment(2) }}">
            <div class="form-group">
              <label for="">Total Belanja </label>
              <input type="text" name="total" id="total" class="form-control" value="{{ number_format($transaksi->total) }}" disabled>
            </div>

            <div class="form-group">
              <label for="">Dibayarkan </label>
              <input type="text" name="dibayar" id="dibayar" class="form-control" value="{{ number_format(request('dibayar')) }}">
            </div>

    > fiana alathifa:
    <button type="submit" class="btn btn-primary btn-block"> Hitung </button>
    </form>
            <hr>

            <div class="form-group">
              <label for="">Kembalian </label>
              <input type="number" disabled name="kembalian" class="form-control" id="" value="{{ $kembalian }}">
            </div>


          </div>
        </div>
      </div>
    </div>
    <!-- End of Main Content -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

