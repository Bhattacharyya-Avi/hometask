<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\StripeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;
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
    Route::post('/do/login','loginPost')->name('do.login');
    Route::get('/registration','registration')->name('registration');
    Route::post('/do/registration','doRegistration')->name('do.registration');
});
// Stripe
Route::controller(StripeController::class)->group(function(){
    Route::get('/payment/{user}','payment')->name('payment');
    Route::post('/stripe/payment/{user}','doPayment')->name('stripe.payment');
});

// frontend
Route::middleware('auth')->group(function(){
    Route::get('/logout',[LoginController::class,'logout'])->name('user.logout');
    Route::prefix('user')->group(function(){
        Route::controller(HomeController::class)->group(function(){
            Route::get('/','home')->name('home');
        });

        // post
        Route::controller(PostController::class)->group(function(){
           Route::get('/post/create','create')->name('post.create'); 
        });
    }); // end user group

    // backend
    Route::prefix('admin')->group(function(){
        Route::controller(DashboardController::class)->group(function(){
            Route::get('/','dashboard')->name('admin.dashboard');
        });
    }); // end admin group
});





