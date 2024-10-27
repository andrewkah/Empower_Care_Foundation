<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\User;
use Illuminate\Support\Facades\Route;


Route::prefix('admin-empowercare')->middleware('guest')->group(function(){
    Route::get('login', [ AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class,'login'])->name('login.user');
    Route::get('register', [ AuthController::class, 'showRegister'])->name('register');
    Route::post('register', [AuthController::class,'register'])->name('register.user');
    Route::get('forgot-password', [AuthController::class, 'forgotPasswordPage'])->name('password.request');
    Route::post('forgot-password', [AuthController::class, 'sendResetRequest'])->name('password.email');
    Route::get('reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
});

Route::prefix('admin-empowercare')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('backend.dashboard.index');
    })->name('admin-home');
});

