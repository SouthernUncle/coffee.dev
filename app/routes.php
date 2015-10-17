<?php

/************************
 * COFFEES CONTROLLER
 */
Route::resource('/coffees', 'CoffeesController', array('except' => array('destroy')));
Route::get('/coffees/createFromRoaster/{roaster}', 'CoffeesController@createFromRoaster');
Route::get('coffees/{coffee}', 'CoffeesController@showByName');

/************************
 * HOME CONTROLLER
 */
Route::get('/', 'HomeController@showHome');
Route::post('/', 'HomeController@contactUs');
Route::get('/login', 'HomeController@showLogin');
Route::post('/login', 'HomeController@doLogin');
Route::get('/logout', 'HomeController@doLogout');
Route::get('/FAQ', 'HomeController@showFAQ');
Route::get('/forgotpassword', 'HomeController@showForgotPassword');
Route::post('/forgotpassword/{id}', 'HomeController@sendPasswordLink');
Route::get('/resetpassword/{hash}', 'HomeController@resetPassword');

/************************
 * INVITATIONS CONTROLLER
 */
Route::resource('/invite', 'InvitationsController', array('except' => array('destroy')));
Route::post('/createinvite', 'InvitationsController@emailInvite');

/************************
 * REGIONS CONTROLLER
 */
Route::resource('/regions', 'RegionsController', array('except' => array('destroy')));

/************************
 * REVIEWS CONTROLLER
 */
Route::resource('/reviews', 'ReviewsController', array('except' => array('index', 'show')));
Route::get('/reviews/createFromCoffee/{coffee}', 'ReviewsController@createFromCoffee');
Route::get('/roasters/coffees/{id}', 'ReviewsController@getCoffees');
Route::get('/categories/flavors/{id}', 'ReviewsController@getFlavors');

/************************
 * ROASTERS CONTROLLER
 */
Route::resource('/roasters', 'RoastersController', array('except' => array('destroy')));

/************************
 * USERS CONTROLLER
 */
Route::resource('/users', 'UsersController');
Route::get('/welcome/{confirmation}', 'UsersController@create');
