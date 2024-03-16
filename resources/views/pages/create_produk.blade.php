<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-5 offset-3 my-5 bg-warning bg-gradient rounded-3">

                    <div class="text-center my-4"><h1>Input Data Produk</h1></div>
                    <form action="{{route('produk.store')}}" method="POST">

                    @csrf

                        <div class="form-label my-3">
                            <label for="">Kode</label>
                            <input type="text" class="form-control" name="kode">
                        </div>

                        <div class="form-label my-3">
                            <label for="">Nama Barang</label>
                            <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-label my-3">
                            <label for="">harga</label>
                            <input type="number" class="form-control" name="harga">
                        </div>

                        <div class="form-label my-3">
                            <label for="">Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>

                        <div class="d-flex justify-content-around">
                           <div class="">
                            <button type="submit" class="btn btn-primary my-3">Kirim</button>
                           </div>

                           <div class="mt-3">
                            <a href="/produk" class="btn btn-success">kembali</a>
                           </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
