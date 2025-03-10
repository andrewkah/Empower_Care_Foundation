<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/articles',[FrontendController::class,'articles'])->name('articles');
Route::get('/articles/{id}',[FrontendController::class,'article_details'])->name('articles.details');
Route::get('/articles/category/{id}', [FrontendController::class, 'article_category'])->name('articles.category');
Route::get('/articles/tag/{id}', [FrontendController::class, 'article_tag'])->name('articles.tag');
Route::post('/articles/search', [FrontendController::class, 'article_search'])->name('articles.search');
Route::get('/programs',[FrontendController::class,'programs'])->name('programs');
Route::get('/programs/{id}',[FrontendController::class,'program_details'])->name('programs.details');
Route::get('/our_departments',[FrontendController::class,'departments'])->name('our_departments');
Route::get('/events',[FrontendController::class,'events'])->name('events');
Route::get('/events/{id}',[FrontendController::class,'event_details'])->name('events.details');

Route::get('/donate_request',[FrontendController::class,'donate'])->name('donate');
Route::post('/submit_donate_request',[FrontendController::class,'donate_store'])->name('submit.donate');
Route::get('/about',[FrontendController::class,'aboutus'])->name('about');
Route::get('/causes',[FrontendController::class,'causes'])->name('causes');
Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::post('/store_contact-us',[FrontendController::class,'contact_us'])->name('contact_us.store');
Route::get('/team',[FrontendController::class,'team'])->name('team');
Route::get('/volunteer',[FrontendController::class, 'volunteer_request'])->name('volunteer');
Route::post('/submit_volunteer_request', [FrontendController::class, 'volunteer_store'])->name('volunteer.request');
Route::get('/album',[FrontendController::class,'album'])->name('album');
Route::get('/album/{id}', [FrontendController::class, 'album_details'])->name('album.details');
Route::get('/donations', function () {
    return view('website.pages.donate');
})->name('donations');
Route::get('/faqs',[FrontendController::class,'faqs'])->name('faqs');
Route::get('/videos',[FrontendController::class,'videos'])->name('videos');
Route::get('/policies',[FrontendController::class,'policies'])->name('policies');
Route::get('/downloads', function () {
    return view('website.pages.downloads');
})->name('downloads');

Route::get('/switch-language/{lang}',[FrontendController::class,'setLanguage'])->name('switch.language');

Route::get('/migrate', function () {
    Artisan::call('migrate');
    echo "Done.";
});

// Route::get('/createlink', function () {
//     Artisan::call('storage:link');

//     echo "done";
// });

Route::get('/clearcache', function () {
    Artisan::call('cache:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    echo "done";
});

require __DIR__.'/admin-auth.php';