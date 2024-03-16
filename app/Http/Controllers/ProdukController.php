<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = produk::all();
        return view('pages.produk')->with('produk', $produk);
    }

    public function create(){
        return view('pages.create_produk');

    }

    public function store(Request $request){

        $produk = [
            'kode' => $request->kode,
            'nama' => $request ->nama,
            'harga' => $request ->harga,
            'stok' => $request ->stok
        ];

        produk::create($produk);
        // dd($produk);

        // $data = [
        //     'produk' -> $produk
        // ];


        return redirect('produk');
    }

    public function destroy(string $id){

        produk::destroy($id);
        return redirect('produk');
    }



    public function edit(string $id){

        $produk = Produk::find($id);
        return view('pages.edit_produk')->with('produk', $produk);
    }


    public function update(Request $request, string $id){

        $produk = Produk::find($id);
        // $input = $request->all();

        $data = [
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,

        ];


        $produk->update($data);
        return redirect('produk');
    }


}
