<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="row my-5">
        <div class="col-4 offset-4 my-5 bg-warning bg-gradient rounded-3">

            <div class="text-center my-4">
                <h1>Edit Produk</h1>
            </div>
            <form action="{{ url('produk/' .$produk->id) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-label">
                    <label for="">id_produk</label>
                    <input type="text" class="form-control" name="kode" value="{{ $produk->kode }}">
                </div>

                <div class="form-label">
                    <label for="">Produk</label>
                    <input type="text" class="form-control" name="nama" value="{{ $produk->nama }}">
                </div>

                <div class="form-label">
                    <label for="">harga</label>
                    <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
                </div>

                <div class="form-label">
                    <label for="">stok</label>
                    <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



