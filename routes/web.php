<?php

use Illuminate\Support\Facades\Route;//? importing the Route class from the Illuminate\Support\Facades namespace

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
    Route::get('/student/{adm}', 'PageController@student')->name('student');
    Route::get('/grade/{marks}', 'PageController@grade')->name('grade');
    
});

/* 
The Route::namespace method is used to specify the namespace of the controller class.(prefixing the controller class with the App\Http\Controllers namespace)
The Route::group method is used to group the routes that share the same namespace/characteristic ex. Route::get
Each Route::get method defines a route that responds to HTTP GET requests
The first argument of the Route::get method is the URI of the route
The second argument of the Route::get method is the controller method that should be called when the route is matched/The action that should be taken when the route is matched
-format 'ControllerName@methodName'
The name method is used to give the route a name that can be used to generate URLs to the route
 */