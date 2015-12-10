<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('author', 'AuthorController');
Route::resource('genre', 'GenreController');

/*
Route::get('/authors', 'AuthorController@index');
Route::get('/author/create', 'AuthorController@create');
Route::get('/author/edit/{author}', 'AuthorController@edit');
Route::post('/author', 'AuthorController@store');
Route::delete('/author/{author}', 'AuthorController@destroy');
*/
