<?php
use App\Traits\Corerong;
use App\Http\Controllers\Cargo\HomeController;
use App\Http\Controllers\Backend\FlightController;

use App\Models\User;


// Corerong::prefix_route();

Route::group(['prefix'=>'b_cargo','as'=>'b_cargo.'],function(){
    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/flight',[FlightController::class,'flight']);
});

// Route::prefix(Corerong::prefix_route())->group(function(){
//     Route::get('/',[HomeController::class,'index']);
//     // Route::get('/create',[BrandController::class,'create']);
// });