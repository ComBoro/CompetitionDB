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

Route::get('', 'CompetitionController@index');
Route::get('profile', 'ProfileController@index');
Route::get('profile/{id}', 'ProfileController@showProfile');
Route::get('competitions', 'CompetitionController@index');
Route::get('competitions/category/{id}', 'CompetitionController@competitionsList');
Route::get('competitions/{id}', 'CompetitionController@details');
Route::get('competitions/add', 'CompetitionController@add');
Route::get('competitions/edit/{id}', 'CompetitionController@edit');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);