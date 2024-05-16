<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\AddProdukController;
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
  return redirect('/listproduk');
});
Route::get('/addproduk', function () {
  return view('tambah_produk');
});
Route::get('/listproduk', function () {
  return view('list_produk');
});
Route::get('/listproduk', [ListProdukController::class, 'show'] );
Route::post('/addproduk', [AddProdukController::class, 'simpan'] )->name('produk.simpan');
