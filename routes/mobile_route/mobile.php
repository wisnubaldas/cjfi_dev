<?php
use App\Http\Controllers\MobileController;

// use App\Traits\Corerong;
// use App\Http\Controllers\MobileController;
Route::prefix('m')->group(function(){
    Route::get('/',[App\Http\Controllers\MobileController::class, 'index']);
    Route::get('/home/{qr?}',[MobileController::class, 'home']);
    Route::get('boking-parkir',[MobileController::class, 'create_boking']);
    Route::get('boking-lantai/{id}',[MobileController::class, 'show_lantai']);
    Route::get('boking-slot/{id}',[MobileController::class, 'boking_slot']);
    Route::get('boking-list-user/{id}',[MobileController::class, 'getUserDateBoking']);
    
    Route::get('masuk/{barcode}',[MobileController::class, 'masuk']);
Route::get('keluar/{barcode}',[MobileController::class, 'keluar']);


    // Route::post('/set_session',[MobileController::class, 'set_session']);
});