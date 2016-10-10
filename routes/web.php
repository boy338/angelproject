<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function() {
	return view('profile');
});

Route::get('/article', function() {
	return view('article');
});

Route::get('/activity', function() {
	return view('activity');
});

Route::get('/contact', function() {
	return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
