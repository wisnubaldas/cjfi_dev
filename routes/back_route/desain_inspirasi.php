<?php

Route::prefix('desain_inspirasi')->group(function(){
    Route::get('/',[App\Http\Controllers\Backend\DesainInspirasiController::class,'index']);
    Route::post('/create',[App\Http\Controllers\Backend\DesainInspirasiController::class,'create']);

});