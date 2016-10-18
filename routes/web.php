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


Route::get('/admin', function () {
    return view('backend.home');
});

Route::get('/admin/dashboard', function () {
    return view('backend.dashboard');
});

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

// Auth
Auth::routes();

// Contact
Route::resource('contact', 'ContactController', ['except' => ['show', 'edit']]);

// Email confirmation
Route::get('resend', 'Auth\RegisterController@resend');
Route::get('confirm/{token}', 'Auth\RegisterController@confirm');


Route::get('/home', 'HomeController@index');
