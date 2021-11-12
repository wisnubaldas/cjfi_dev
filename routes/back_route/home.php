<?php
use App\Http\Controllers\Backend\HomeController;

Route::prefix('home')->group(function(){
    Route::get('/',[HomeController::class,'index']);
    Route::get('/status-panel',[HomeController::class,'status_panel']);
    // Route::get('/status-boking',[HomeController::class,'status_boking']);
});