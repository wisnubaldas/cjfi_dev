<?php
use App\Http\Controllers\Backend\ProductImageController;
Route::prefix('product-image')->group(function(){
    Route::get('/',[ProductImageController::class,'index']);
    Route::get('/create',[ProductImageController::class,'create']);
    Route::post('/create',[ProductImageController::class,'insert']);
    Route::get('/get_motif',[ProductImageController::class,'get_motif']);
    Route::get('/get-product-by-motif/{id}',[ProductImageController::class,'get_product_by_motif']);
    Route::post('/upload-image',[ProductImageController::class,'upload_image']);
    Route::get('/warna',[ProductImageController::class,'warna']);
    Route::get('/delete/{id}',[ProductImageController::class,'delete']);
});