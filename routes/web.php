<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Models\Backend\Slide;
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
    $slide = Slide::all();
    return view('welcome',compact('slide'));
});
Route::get('lang/{language}', [LocalizationController::class,'switch'])->name('localization.switch');
Route::prefix('koleksi')->group(function(){
    Route::get('merek/{brand?}/{type?}/{ukuran?}/{motif?}',[KoleksiController::class, 'merek'])->name('koleksi.merek');
    Route::get('inspirasi',[KoleksiController::class, 'inspirasi'])->name('koleksi.inspirasi');
    Route::get('produk',[KoleksiController::class, 'produk'])->name('koleksi.produk');
});
Route::get('tentang',[KoleksiController::class, 'tentang'])->name('tentang');
Route::get('berita',[KoleksiController::class, 'berita'])->name('berita');
Route::get('dukungan',[KoleksiController::class, 'dukungan'])->name('dukungan');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('slider')->middleware(['auth'])->group(function(){
    Route::get('create',[App\Http\Controllers\Backend\SliderController::class,'index'])->name('slider.create');
    Route::post('create',[App\Http\Controllers\Backend\SliderController::class,'save'])->name('slider.save');
    Route::get('getBasicData',[App\Http\Controllers\Backend\SliderController::class,'getBasicData'])->name('slider.getBasicData');
});

Route::prefix('merek')->middleware(['auth'])->group(function(){
    Route::get('brand',[App\Http\Controllers\BrandController::class,'index'])->name('merek.brand');
    Route::post('save_image',[App\Http\Controllers\BrandController::class,'save_image'])->name('merek.save_image');
    Route::post('store',[App\Http\Controllers\BrandController::class,'store'])->name('merek.store');
    Route::get('grid',[App\Http\Controllers\BrandController::class,'grid'])->name('merek.grid');
});

