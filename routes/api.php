<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\ProdukController;
use App\Http\Controllers\API\TipeController;
use App\Http\Controllers\API\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('customer', [CustomerController::class, 'index']);
Route::get('produk', [ProdukController::class, 'index']);
Route::get('tipe', [TipeController::class, 'index']);
Route::get('transaksi', [TransaksiController::class, 'index']);