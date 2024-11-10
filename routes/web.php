<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/articles',[FrontendController::class,'articles'])->name('articles');
Route::get('/articles/{id}',[FrontendController::class,'article_details'])->name('articles.details');
Route::get('/articles/category/{id}', [FrontendController::class, 'article_category'])->name('articles.category');
Route::get('/articles/tag/{id}', [FrontendController::class, 'article_tag'])->name('articles.tag');
Route::post('/articles/search', [FrontendController::class, 'article_search'])->name('articles.search');
Route::get('/programs',[FrontendController::class,'programs'])->name('programs');
Route::get('/programs/{id}',[FrontendController::class,'program_details'])->name('programs.details');
Route::get('/events',[FrontendController::class,'events'])->name('events');
Route::get('/events/{id}',[FrontendController::class,'event_details'])->name('events.details');
Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');
Route::get('/causes',[FrontendController::class,'causes'])->name('causes');
Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::post('/contact-us',[FrontendController::class,'contact_us'])->name('contact_us.store');
Route::get('/team',[FrontendController::class,'team'])->name('team');
Route::get('/sponsors', function () {
    return view('website.pages.sponsors');
})->name('sponsors');
Route::get('/album',[FrontendController::class,'album'])->name('album');
Route::get('/donations', function () {
    return view('website.pages.donate');
})->name('donations');
Route::get('/faqs',[FrontendController::class,'faqs'])->name('faqs');
Route::get('/videos',[FrontendController::class,'videos'])->name('videos');
Route::get('/downloads', function () {
    return view('website.pages.downloads');
})->name('downloads');

require __DIR__.'/admin-auth.php';