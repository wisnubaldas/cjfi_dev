<?php
use App\Http\Controllers\Backend\ProductController;
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class,'index']);
    Route::get('/create',[ProductController::class,'create']);

});