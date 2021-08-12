<?php
use App\Http\Controllers\Shop\KoleksiMerekController;
Route::prefix('koleksi-merek')->group(function(){
    Route::get('/',[KoleksiMerekController::class, 'index']);
});