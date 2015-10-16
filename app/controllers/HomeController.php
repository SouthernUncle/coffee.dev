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
			return Redirect::intended('/users/' . Auth::user()->username);
		} else {
			//login failed, go back to login screen
			Session::flash('errorMessage', 'Your username and/or password were incorrect.');
			Log::warning('User ' . $username . ' failed to log in.');
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function showForgotPassword()
	{
		if(!Auth::check()) {
			return View::make('forgotpassword');
		} else {
			Session::flash('errorMessage', 'You cannot reset your password while logged in.');
			return Redirect::action('UsersController@edit', Auth::user()->username);
		}
	}

	public function sendPasswordLink()
	{
		$u = User::where('email', Input::get('email'))->firstOrFail();

		$data = array(
			'email_address' => Input::get('email'),
			'hash'  		=> $this->encrypt_decrypt('encrypt', Input::get('email')),
			'username'		=> $u->username,
		);

		Mail::send('emails.confirm-password-reset', $data, function($message) use ($data) {
			$message->from('postmaster@sandbox6bf8d9af287f40889101d1fa77058dc8.mailgun.org', 'BeanRate.com');
			$message->to(Input::get('email'), $data['username']);
			$message->subject('Confirm Password Reset');
		});
		return Redirect::action('HomeController@showLogin');
	}

	public function resetPassword($hash)
	{
		$email = $this->encrypt_decrypt('decrypt', $hash);
		// dd($email);	
		if(Auth::check()) {
			Auth::logout();
		}

		$query = User::where('email', $email)->firstOrFail();
		
		if(empty($query)) {
			// Log something here
			Session::flash('errorMessage', 'Invalid reset attempt.');
			return Redirect::action('HomeController@showLogin');
		}

		$newPass = User::generatePassword();

		$user = User::findOrFail($query->id);
		$user->password = $newPass;
		$user->save();

		$data = array(
			'email_address' => $user->email,
			'newPass'  		=> $newPass,
			'username'		=> $user->username,
		);

		Mail::send('emails.password-reset', $data, function($message) use ($data) {
			$message->from('postmaster@sandbox6bf8d9af287f40889101d1fa77058dc8.mailgun.org', 'BeanRate.com');
			$message->to($data['email_address'], $data['username']);
			$message->subject('Password Reset');
		});

		Auth::login($user);

		return Redirect::action('UsersController@edit', Auth::user()->username);
	}

	public function encryptIt($string)
	{	
		$method = 'aes-128-cbc';
		$iv = '1234567812345678';
		$pass = '1234567812345678';
		$encrypted = openssl_encrypt($string, $method, $pass, true, $iv);
		return $encrypted;
	}

	public function decryptIt($string)
	{	
		$method = 'aes-128-cbc';
		$iv = '1234567812345678';
		$pass = '1234567812345678';
		$decrypted = openssl_decrypt($string, $method, $pass, true, $iv);
		return $decrypted;
	}

	public function encrypt_decrypt($action, $string) {
	    $output = false;

	    $encrypt_method = "AES-256-CBC";
	    $secret_key = 'password';
	    $secret_iv = 'password';

	    // hash
	    $key = hash('sha256', $secret_key);
	    
	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);

	    if( $action == 'encrypt' ) {
	        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	        $output = base64_encode($output);
	    }
	    else if( $action == 'decrypt' ){
	        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    }

	    return $output;
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
