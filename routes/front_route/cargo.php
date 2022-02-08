<?php

Route::prefix('cargo')->group(function(){
    Route::get('/flight-scheduled',[App\Http\Controllers\Cargo\CargoController::class,'flight_scheduled']);
});