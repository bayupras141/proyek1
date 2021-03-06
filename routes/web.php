<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->name('laporan');

// create route resource
Route::resource('tipe', App\Http\Controllers\TipeController::class);
Route::resource('customer', App\Http\Controllers\CustomerController::class);
Route::resource('produk', App\Http\Controllers\ProdukController::class);
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);
