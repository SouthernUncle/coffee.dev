<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		$coffees = Coffee::all()->random(6);

		foreach($coffees as $c) {
			$new = Image::make(public_path() . $c->img_url)->fit(500)->save(public_path() . '/img/fit500' . $c->img_url);
		}

		return View::make('home', compact('coffees'));
	}

	public function showLogin()
	{
		if(!Auth::check()) {
			return View::make('login');
		} else {
			return Redirect::action('HomeController@showHome');
		}
	}

	public function doLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			Session::flash('successMessage', 'Login successful!');
			return Redirect::intended('/users/' . Auth::id());
		} else {
			//login failed, go back to login screen
			Session::flash('errorMessage', 'Your username and/or password were incorrect.');
			Log::warning('User ' . $username . ' failed to log in.');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		// Session flash
		Session::flash('successMessage', 'You have successfully logged out.');

		return Redirect::to('/');	
	}

	public function contactUs()
	{
		if(!Input::all()) {
			Session::flash('errorMessage', 'You were missing some info there...');
			Redirect::back()->withInput();
	    }
		
		$data = array(
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'body'  => Input::get('message'),
			'subject' => Input::get('subject'),
		);

		Mail::send('emails.contact', $data, function($message) {
			$message->from(Input::get('email'), Input::get('name'));
			$message->to('beanrate@gmail.com', 'Admin');
			$message->subject(Input::get('subject'));
		});

		Session::flash('successMessage', 'Your message was sent.');
		return Redirect::action('HomeController@showHome');	
	}

	public function showFAQ()
	{
		return View::make('FAQ');
	}
	
}
