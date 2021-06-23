<?php
Route::prefix('slider')->group(function(){
    Route::get('create',[App\Http\Controllers\Backend\SliderController::class,'index'])->name('slider.create');
    Route::post('create',[App\Http\Controllers\Backend\SliderController::class,'save'])->name('slider.save');
    Route::get('getBasicData',[App\Http\Controllers\Backend\SliderController::class,'getBasicData'])->name('slider.getBasicData');
});