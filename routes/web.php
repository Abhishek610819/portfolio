<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.home');
// });
Route::view('/', 'front.home')->name('home');
Route::view('/about', 'front.about')->name('about');
Route::view('/skills', 'front.skills')->name('skills');
Route::view('/projects', 'front.projects')->name('projects');
Route::view('/services', 'front.services')->name('services');

Route::view('/contact', 'front.contact')->name('contact');
// Route::post('/contact', [ContactController::class, 'store'])
//     ->name('contact.store');