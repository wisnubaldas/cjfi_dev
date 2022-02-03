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

Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index']);
// Corerong::include_route_files(__DIR__.'/front_route/');
Corerong::include_route_files(__DIR__.'/mobile_route/');
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Corerong::include_route_files(__DIR__.'/back_route/');
});