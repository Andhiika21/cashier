<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksidetail;
use App\Models\transaksi;
use App\Models\produk;


class StrukController extends Controller
{
    public function edit($id){

        $tt = Transaksidetail::whereTransaksiId($id)->first();
        $transaksi = Transaksi::find($id);
        $transaksidetail = Transaksidetail::whereTransaksiId($id)->get();
        $barang_id = request('id');

        $dataBarang = produk::find($barang_id);






        $data = [
            'transaksidetail'=> $transaksidetail,
            'transaksi' => $transaksi,
            'dataBarang' => $dataBarang,
            'tt' => $tt

        ];
        // $transaksidetail = Transaksidetail::find($id);
        return view('struk', $data);
    }
}
