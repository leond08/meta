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

Route::get('/', 'LoginController@index');
Route::get('/login', 'LoginController@authenticate');
Route::get('/dashboard','PagesController@home');
Route::get('/dashboard/event','PagesController@show');
Route::get('/dashboard/create','PagesController@create');
Route::get('/event/{id}',[
		'uses' => 'PagesController@view',
		'as' => 'event'
	]);



