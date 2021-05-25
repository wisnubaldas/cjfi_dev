<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Models\Backend\Slide;
use Jenssegers\Agent\Agent;
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
    $agent = new Agent();
    $slide = Slide::all();
    if($agent->isMobile())
    {
        return dump('aplikasi mobile');
    }
    return view('welcome',compact('slide'));
});
Route::get('lang/{language}', [LocalizationController::class,'switch'])->name('localization.switch');
Route::prefix('koleksi')->group(function(){
    Route::get('detail/{id}',[KoleksiController::class, 'detail']);
    Route::get('merek/{brand?}/{type?}/{ukuran?}/{motif?}',[KoleksiController::class, 'merek'])->name('koleksi.merek');
    Route::get('inspirasi/{tipe?}',[KoleksiController::class, 'inspirasi'])->name('koleksi.inspirasi');
    Route::get('inspirasi/get_id/{id}',[KoleksiController::class, 'inspirasi_id']);
    Route::get('produk/{id?}',[KoleksiController::class, 'produk'])->name('koleksi.produk');
    Route::get('dekorasi_detail/{parent_id}',[KoleksiController::class, 'dekorasi_detail'])->name('koleksi.dekorasi_detail');
});

Route::prefix('tentang')->group(function(){
    Route::get('/',[App\Http\Controllers\TentangController::class, 'index'])->name('tentang');
});

Route::prefix('berita')->group(function(){
    Route::get('/',[App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
});

Route::prefix('dukungan')->group(function(){
    Route::get('/',[App\Http\Controllers\DukunganController::class, 'index'])->name('dukungan');
});


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('slider')->middleware(['auth'])->group(function(){
    Route::get('create',[App\Http\Controllers\Backend\SliderController::class,'index'])->name('slider.create');
    Route::post('create',[App\Http\Controllers\Backend\SliderController::class,'save'])->name('slider.save');
    Route::get('getBasicData',[App\Http\Controllers\Backend\SliderController::class,'getBasicData'])->name('slider.getBasicData');
});

Route::prefix('merek')->middleware(['auth'])->group(function(){
    Route::get('parent_image',[App\Http\Controllers\BrandController::class,'parent_image'])->name('merek.parent_image');
    Route::get('brand',[App\Http\Controllers\BrandController::class,'index'])->name('merek.brand');
    Route::post('save_image',[App\Http\Controllers\BrandController::class,'save_image'])->name('merek.save_image');
    Route::post('store',[App\Http\Controllers\BrandController::class,'store'])->name('merek.store');
    Route::get('grid',[App\Http\Controllers\BrandController::class,'grid'])->name('merek.grid');
    Route::get('edit/{id}',[App\Http\Controllers\BrandController::class,'edit']);
    Route::get('destroy/{id}',[App\Http\Controllers\BrandController::class,'destroy']);
    Route::get('remove_image/{id}',[App\Http\Controllers\BrandController::class,'remove_image']);
});

Route::prefix('desain_inspirasi')->middleware(['auth'])->group(function(){
    Route::get('/',[App\Http\Controllers\Backend\DesainInspirasiController::class,'index']);
    Route::post('/create',[App\Http\Controllers\Backend\DesainInspirasiController::class,'create']);

});
Route::prefix('produk_baru')->middleware(['auth'])->group(function(){
    Route::get('/',[App\Http\Controllers\Backend\ProdukBaruController::class,'index']);
    Route::post('/create',[App\Http\Controllers\Backend\ProdukBaruController::class,'create']);
});