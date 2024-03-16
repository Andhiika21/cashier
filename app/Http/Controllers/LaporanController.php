<?php

namespace App\Http\Controllers;
use App\Models\laporan;
use Illuminate\Http\Request;


class LaporanController extends Controller
{
    public function index()
    {
        $laporans = laporan::get();
        return view('pages.laporan',compact(['laporans']));
    }  
    
    
    public function create(){

        return view('pages.create_laporan');
    }

    public function store(Request $request){

        $produk = [
            'tanggal' => $request->tanggal,
            'pemasukan' => $request ->pemasukan,
        ];

        laporan::create($produk);
        // dd($produk);

        // $data = [
        //     'produk' -> $produk
        // ];


        return redirect('laporan');
    }
}
