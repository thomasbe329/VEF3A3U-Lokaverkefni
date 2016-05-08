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

Route::get('/', 'ShowController@index');

Route::get('/show/{showid}', 'ShowController@show' );

Route::get('/shows/{page}', 'ShowController@shows');

Route::get('/search/{query}', 'ShowController@search');