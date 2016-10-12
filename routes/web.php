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

// Contact
Route::resource('contact', 'ContactController', ['except' => ['show', 'edit']]);

/*
Route::group(['prefix' => 'contact'], function() {
	Route::get('create', 'ContactController@create');
	Route::post('store', 'ContactController@store');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
