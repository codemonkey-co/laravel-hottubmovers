<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::post('/', 'PagesController@email');

Route::get('login', 'PagesController@login');
Route::post('login', 'SessionsController@create');

Route::get('/logout', 'SessionsController@destroy');

Route::get('register', 'PagesController@register');
Route::post('register', 'PagesController@store');

Route::middleware('auth')->group(function () {
	Route::get('dashboard', 'PagesController@dashboard');
	Route::post('dashboard', 'PagesController@storeRenterInfo');
	Route::put('dashboard', 'PagesController@updateRenterInfo');
});