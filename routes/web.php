<?php

use App\Http\Controllers\FilmController;
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
    return view('welcome');
});

Route::group(['prefix' => 'film'], function() {
    Route::get('/', [FilmController::class, 'landingPage'])->name('landing-page');
    Route::get('/{id}/produk-page', [FilmController::class, 'produkPage'])->name('produk-page');
    Route::get('/transaksi-page', [FilmController::class, 'transaksiPage'])->name('transaksi-page');
    Route::get('/bukti-pembayaran-page', [FilmController::class, 'buktiPembayaranPage'])->name('bukti-pembayaran-page');
    Route::get('/status-transaksi-page', [FilmController::class, 'statusTransaksiPage'])->name('status-transaksi-page');
    

}); 
