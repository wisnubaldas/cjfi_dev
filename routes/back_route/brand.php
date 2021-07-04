<?php
use App\Http\Controllers\Backend\BrandController;
Route::prefix('brand')->group(function(){
    Route::get('/',[BrandController::class,'index']);
    Route::get('/create',[BrandController::class,'create']);

});