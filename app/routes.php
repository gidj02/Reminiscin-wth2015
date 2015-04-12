<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

Route::get('/login', ['as' => 'login', 'uses' => 'SessionController@index']);
Route::post('/storesession', ['as' => 'storesession', 'uses' => 'SessionController@store']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);
Route::get('/itinerary/create/{user}', ['as' => 'createitinerary', 'uses' => 'ItineraryController@create']);

Route::resource('user', 'UserController',[
	'only' => [
		'edit', 'update', 'destroy', 'create', 'store'
	]
]);

Route::resource('itinerary', 'ItineraryController',[
	'only' => [
		'show', 'store'
	]
]);
