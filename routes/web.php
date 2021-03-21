<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExrsicesController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



//normal routing

Route::view('/','welcome');
Route::post('/send',[SendController::class,'send']);
Route::get('/nextHome',function(){
    return view('nextHome');
})->name('nextHome');

//account routing 
Route::get('/account',[AccountController::class,'index'])->name('account');
Route::post('/update',[AccountController::class,'store'])->name('update');
Route::post('/account',[AccountController::class,'change'])->name('change');

//history routing 



Route::group(['middleware' => 'auth'],function(){
    Route::get('/history',[HistoryController::class,'index'])->name('history');
    Route::get('/addNew',[HistoryController::class,'create'])->name('add');
    Route::post('/addNew',[HistoryController::class,'store']);
});



//exrcices routing
Route::get('/exrcices',[ExrsicesController::class,'index'])->name('exrcices')->middleware('auth');

//classic login 
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home',[HomeController::class,'store']);

//google login 
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);
//facebook login 
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class,'handleFacebookCallback']);