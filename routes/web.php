<?php
use App\Traits\Corerong;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Models\Backend\Slide;
use Jenssegers\Agent\Agent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     $agent = new Agent();
//     if($agent->isMobile())
//     {
//         return  view('mobile.landing');
//     }
//     return view('e-comerce.home');
// });
Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->middleware('mobile');

// Route::get('lang/{language}', [LocalizationController::class,'switch'])->name('localization.switch');
Corerong::include_route_files(__DIR__.'/front_route/');
// Route::get('/',[App\Http\Controllers\MobileController::class, 'index'])->prefix('mobile')->name('mobile');
Corerong::include_route_files(__DIR__.'/mobile_route/');
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Corerong::include_route_files(__DIR__.'/back_route/');
});