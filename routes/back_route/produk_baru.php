<?php

Route::prefix('produk_baru')->group(function(){
    Route::get('/',[App\Http\Controllers\Backend\ProdukBaruController::class,'index']);
    Route::post('/create',[App\Http\Controllers\Backend\ProdukBaruController::class,'create']);
});