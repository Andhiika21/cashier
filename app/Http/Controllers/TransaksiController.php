<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\transaksi;
use App\Models\Transaksidetail;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = transaksi::get();
        return view('pages.transaksi', compact('transaksi'));
    }

    public function create(){

        $data = [
            'total' => 0,
            'tanggal' => date('Y-m-d'),
            'bayar' => 0,
            'kembalian' => 0

        ];

        $transaksi = Transaksi::create($data);

        return redirect('transaksi/' . $transaksi->id. '/edit');
    }


    public function edit($id){

        // $barangs = produk::get();

        // $barang_id = request('id');
        // $dataBarang = produk::find($barang_id);

        // $data = [
        //     'barangs' => $barangs,
        //     'dataBarang' => $dataBarang

        // ];

        $barangs = produk::get();

        $barang_id = request('id');
        $dataBarang = produk::find($barang_id);

        $transaksidetail = Transaksidetail::whereTransaksiId($id)->get();
        $transaksidetailid = Transaksidetail::all();


        $qty = request('qty');




        $subtotal = 0;
        if( $dataBarang){
            $subtotal = $qty *  $dataBarang->harga;
        }




        $transaksi = Transaksi::find($id);

        $dibayar = request('dibayar');
        $kembalian = $dibayar - $transaksi->total;




        $data = [
            'barangs' => $barangs,
            'dataBarang' =>  $dataBarang,
            'qty' => $qty,
            'subtotal' => $subtotal,
            'transaksidetail'=> $transaksidetail,
            'transaksi' => $transaksi,
            'kembalian' => $kembalian,
            'transaksidetailid' =>  $transaksidetailid

        ];
        return view('pages.create_transaksi', $data);
    }


    public function destroy(string $id){

        Transaksi::destroy($id);
        return redirect('transaksi');
    }


    public function login(){

        return view('login');
    }
}
