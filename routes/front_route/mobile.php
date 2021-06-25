<?php
use App\Traits\Corerong;
use App\Http\Controllers\MobileController;
Route::prefix('mobile')->group(function(){
    Route::get('/',[MobileController::class, 'index']);
    Route::get('/home',[MobileController::class, 'home']);
});