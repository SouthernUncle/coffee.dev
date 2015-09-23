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

Route::resource('/users', 'UsersController');
Route::resource('/coffees', 'CoffeesController');
Route::resource('/region', 'RegionsController');
Route::resource('/param', 'ParametersController');
Route::resource('/invite', 'InvitationsController');

Route::resource('/reviews', 'ReviewsController');
Route::resource('/role', 'RolesController');

Route::get('/login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');


Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/theme1', function()
{
	return View::make('sass-test');
});