<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div style="max-width: 400px" class="justify-content-center m-3 border border-dark">
        <div class="d-flex justify-content-center mt-2">
         <div class="w-50 mt-1 text-center">
             <h4><b>Struk Belanja</b></h4>
         </div>

        </div>
        <hr class="border border-dark border-2 opacity-0">

        <div class="mt-3 mx-2">
         <table class="text-center table">
             <thead class="table">
                 <tr>
                     <th>No</th>
                     <th>Barang</th>
                     <th>harga</th>
                     <th>Qty</th>
                     <th>Subtotal</th>
                 </tr>
             </thead>

             <tbody class="table table-primary">


                 @foreach ($transaksidetail as $item)
                            <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $item->nama_barang }}</td>
                             <td>{{ number_format($item->harga) }}</td>
                             <td>{{ $item->qty }}</td>
                             <td>{{ number_format($item->qty * $item->harga) }}</td>
                             <td>{{ $item->nama_pelanggan }}</td>
                         </tr>
                            @endforeach
             </tbody>
         </table>
        </div>

        <hr class="border border-dark border-2 opacity-0">



         <div class=" mx-4 text-end" style="">
            <h6 class="mx-3"><b>Tanggal : {{ $transaksi->tanggal }}</b></h6>
             <h6 class="mx-3"><b>Total: {{ number_format( $transaksi->total) }}</b></h6>
         </div>

     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
