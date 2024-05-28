<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/validate_register', 'validate_register')->name('validate_register');
    Route::post('/validate_login', 'validate_login')->name('validate_login');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});