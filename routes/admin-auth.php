<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin-empowercare')->middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('backend.dashboard.index');
    })->name('admin-dashboard');
    // Route::resource('register', [RegisterController::class, 'register']);
    // Route::resource('login', [LoginController::class, 'login']);
});

Route::prefix('admin-empowercare')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('admin-dashboard');
    Route::get('/dashboard', [])->name('');
});

