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

Route::resource('/coffees', 'CoffeesController');
Route::get('/coffees/createFromRoaster/{id}', 'CoffeesController@createFromRoaster');

Route::get('/', 'HomeController@showHome');
Route::post('/', 'HomeController@contactUs');
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');

Route::resource('/invite', 'InvitationsController');
Route::post('/createinvite', 'InvitationsController@emailInvite');

Route::resource('/regions', 'RegionsController');

Route::resource('/reviews', 'ReviewsController');
Route::get('/reviews/createFromCoffee/{id}', 'ReviewsController@createFromCoffee');
Route::get('roasters/coffees/{id}', 'ReviewsController@getCoffees');
Route::get('categories/flavors/{id}', 'ReviewsController@getFlavors');

Route::resource('/roasters', 'RoastersController');

Route::resource('/users', 'UsersController');
Route::get('/createnewuser/{confirmation}', 'UsersController@create');