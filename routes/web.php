<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/validate_register', 'validate_register')->name('validate_register');
    Route::post('/validate_login', 'validate_login')->name('validate_login');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/index', 'index')->name('page.index');
});

Route::resource("/student", StudentController::class);