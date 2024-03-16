<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksidetailController;
use App\Http\Controllers\StrukController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/laporan', LaporanController::class);
Route::resource('/produk', ProdukController::class);
Route::resource('/transaksi', TransaksiController ::class);
Route::get('/transaksi/detail/delete', [TransaksidetailController::class, 'delete']);
Route::post('/transaksi/detail/create', [TransaksidetailController::class, 'create']);
Route::post('/transaksi/detail/kirim', [TransaksidetailController::class, 'kirim']);
Route::resource('/struk', strukController::class);
Route::get('/login', [TransaksiController ::class, 'login']);
Route::get('/user', [UserController ::class, 'user']);
