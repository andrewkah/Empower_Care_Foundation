<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
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
    Route::resource('articles', ArticleController::class);
    Route::resource('article-categories', ArticleCategoryController::class);
    Route::resource('album', AlbumController::class);
    Route::resource('causes', CauseController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('events', EventController::class);
    Route::resource('event-categories', EventCategoryController::class);
    Route::resource('teams', TeamController::class);
    Route::resource('videos', VideoController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('programs', ProgramController::class);
    Route::resource('donations', DonationController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('users', UserController::class);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

