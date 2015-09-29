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

Route::resource('/regions', 'RegionsController');
Route::resource('/roasters', 'RoastersController');
Route::resource('/param', 'ParametersController');
Route::resource('/invite', 'InvitationsController');

Route::post('/createinvite', 'InvitationsController@emailInvite');

Route::resource('/reviews', 'ReviewsController');
Route::resource('/roles', 'RolesController');

Route::get('/', 'HomeController@showHome');
Route::get('/login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');

Route::get('roasters/coffees/{id}', 'RoastersController@getCoffees');