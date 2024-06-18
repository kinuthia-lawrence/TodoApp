<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//! Routing to a controller method

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'PageController@home')->name('home');
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::get('/services', 'PageController@services')->name('services');
    Route::get('/blog', 'PageController@blog')->name('blog');
    Route::get('/products', 'PageController@products')->name('products');
    Route::get('/galary', 'PageController@galary')->name('galary');
    
});