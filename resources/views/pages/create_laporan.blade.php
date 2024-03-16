<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-5 offset-3 my-5 bg-warning bg-gradient rounded-3">
{{-- <div class="row">
    <div class="col-8"> --}}
        <form action="{{route('laporan.store')}}" method="POST">

            @csrf

            <div class="form-label">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>

            <div class="form-label">
                <label for="">Pemasukan</label>
                <input type="number" class="form-control" name="pemasukan">
            </div>

            <div>
            <button type="submit">Kirim</button>
            </div>
        </form>
    </div>
</div>