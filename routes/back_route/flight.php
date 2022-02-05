<?php
Route::prefix('flights')->group(function(){
    Route::get('/',[App\Http\Controllers\Backend\FlightController::class,'index']);
});