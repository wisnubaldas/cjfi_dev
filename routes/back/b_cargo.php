<?php
use App\Traits\Corerong;
use App\Http\Controllers\Cargo\HomeController;
use App\Models\User;
Route::group(['prefix'=>'b_cargo','as'=>'b_cargo.'],function(){
    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/flight',function(){
            echo "asdasd";
    });

});

// Route::prefix(Corerong::prefix_route())->group(function(){
//     Route::get('/',[HomeController::class,'index']);
//     // Route::get('/create',[BrandController::class,'create']);
// });