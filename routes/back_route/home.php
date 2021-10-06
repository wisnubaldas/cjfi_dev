<?php
use App\Http\Controllers\Backend\HomeController;

Route::prefix('home')->group(function(){
    Route::get('/',[HomeController::class,'index']);
    Route::get('/slot-mobil',[HomeController::class,'slot_kosong']);
    Route::get('/status-boking',[HomeController::class,'status_boking']);
});