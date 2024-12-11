<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/homepage', function(){
    return view('homepage');
})->name('homepage');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/admissions', function(){
    return view('admissions');
})->name('admissions');

Route::get('/programs', function(){
    return view('programs');
})->name('programs');

Route::get('/linkages', function(){
    return view('linkages');
})->name('linkages');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');


Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/newstudent', function(){
    return view('newstudent');
})->name('newstudent');

Route::get('/oldstudent', function(){
    return view('oldstudent');
})->name('oldstudent');
