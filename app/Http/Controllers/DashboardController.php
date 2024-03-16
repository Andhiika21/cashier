<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
    $totaltransaksi = Transaksi::count();
    return view('welcome', compact('totaltransaksi'));
   }
}
