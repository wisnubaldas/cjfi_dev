<?php
Route::prefix('berita')->group(function(){
    Route::get('/',[App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
});