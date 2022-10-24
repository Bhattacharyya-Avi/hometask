<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::controller(LoginController::class)->group(function(){
    Route::get('/','login')->name('login');
    Route::get('/registration','registration')->name('registration');
});
Route::prefix('admin')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/','dashboard')->name('admin.dashboard');
    });
});

