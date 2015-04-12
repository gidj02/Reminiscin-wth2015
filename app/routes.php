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
Route::post('/item/create/{id}', ['as' => 'itemcreate', 'uses' => 'ItemController@create']);
Route::get('/login', ['as' => 'login', 'uses' => 'SessionController@index']);
Route::post('/storesession', ['as' => 'storesession', 'uses' => 'SessionController@store']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionController@destroy']);
Route::get('/itinerary/create/{user}', ['as' => 'createitinerary', 'uses' => 'ItineraryController@create']);
Route::post('/search/item', ['as' => 'search', 'uses' => 'ItemController@index']);
Route::get('/itinerary/view/item/{item}', ['as' => 'view', 'uses' => 'ItemController@viewItem']);
Route::get('/item/store/{id}', ['as' => 'itemstore', 'uses' => 'ItemController@store']);

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

Route::resource('item', 'ItemController',[
	'only' => [
		'show'
	]
]);

