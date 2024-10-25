<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.dashboard.index');
})->name('home');
Route::get('/events', function () {
    return view('website.pages.events');
})->name('events');
Route::get('/events/details', function () {
    return view('website.pages.events-details');
})->name('events-details');
Route::get('/news', function () {
    return view('website.pages.news');
})->name('news');
Route::get('/about', function () {
    return view('website.pages.about');
})->name('about');
Route::get('/causes', function () {
    return view('website.pages.cause');
})->name('causes');
Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::get('/team', function () {
    return view('website.pages.team');
})->name('team');
Route::get('/sponsors', function () {
    return view('website.pages.sponsors');
})->name('sponsors');
Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::get('/album', function () {
    return view('website.pages.album');
})->name('album');
Route::get('/donations', function () {
    return view('website.pages.donate');
})->name('donations');
Route::get('/donation/details', function () {
    return view('website.pages.donation-details');
})->name('donation-details');
Route::get('/videos', function () {
    return view('website.pages.videos');
})->name('videos');
Route::get('/downloads', function () {
    return view('website.pages.downloads');
})->name('downloads');

require __DIR__.'/admin-auth.php';