<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\LocalizationController;
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
Route::get('lang/{language}', [LocalizationController::class,'switch'])->name('localization.switch');

Route::prefix('koleksi')->group(function(){
    Route::get('merek',[KoleksiController::class, 'merek'])->name('koleksi.merek');
    Route::get('inspirasi',[KoleksiController::class, 'inspirasi'])->name('koleksi.inspirasi');
    Route::get('produk',[KoleksiController::class, 'produk'])->name('koleksi.produk');
});

Route::get('tentang',[KoleksiController::class, 'tentang'])->name('tentang');
Route::get('berita',[KoleksiController::class, 'berita'])->name('berita');
Route::get('dukungan',[KoleksiController::class, 'dukungan'])->name('dukungan');

