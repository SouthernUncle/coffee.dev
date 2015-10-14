<?php

class UsersController extends \BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('create', 'store')));	
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create($confirmation)
	{
		if(!Auth::check()) {
			$query = Invitation::where('confirmation', $confirmation)->first();
			if(empty($query)) {
				// Log something here
				Session::flash('errorMessage', 'Invalid invitation code.');
				return Redirect::action('HomeController@showHome');
			}

			$invite = Invitation::findOrFail($query->id);
			$invite->confirmation 	= null;
			$invite->save();

			return View::make('users.create');
		} else {
			Session::flash('errorMessage', 'The FBI has been alerted to your activity.');
			return Redirect::action('HomeController@showHome');
		}
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user = new User(); 

		$user->role_id = 2;
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->roast_pref = Input::get('roast_pref');
		$user->acid_pref = Input::get('acid_pref');
		$user->body_pref = Input::get('body_pref');
		$user->save();

		return Redirect::action('HomeController@showLogin');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if($id != Auth::user()->username) {
			Session::flash('errorMessage', 'You do not have permission to view this account.');
			return Redirect::action('HomeController@showHome');
		}

		$user 	 = User::where('username', $id)->firstOrFail();
		$reviews = Review::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get(); 

		$myInvites  = Invitation::where('user_id', Auth::id())->get();
		$remaining 	= 5 - count($myInvites);
		$adminSent  = count($myInvites);
		
		return View::make('users.show', compact('user', 'reviews', 'remaining', 'adminSent'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if($id != Auth::id()) {
			Session::flash('errorMessage', 'You do not have permission to edit this account.');
			return Redirect::action('HomeController@showHome');
		}

		$user = User::findOrFail($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$id = Auth::id();

		$user = User::find($id);

		$password = Input::get('password');
		$validator = Validator::make(Input::all(), User::$editRules);


		if ($validator->fails()) {
	        Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } 

	    if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			return App::abort(404);
		}

		if ((Input::has('newPass') || Input::has('newPassConfirm')) && (Input::get('newPass') != Input::get('newPassConfirm'))) {
			Session::flash('errorMessage', 'Your passwords did not match');
			return Redirect::back()->withInput()->withErrors($validator);
		}

		// updates the edited user
		$user->role_id 		= $user->role_id;

		if(Input::get('email') != $user->email) {
			$user->email = Input::get('email');
		}

		if(Input::get('username') != $user->username) {
			$user->username = Input::get('username');
		}
			
		$user->roast_pref 	= Input::get('roast_pref');
		$user->acid_pref 	= Input::get('acid_pref');
		$user->body_pref 	= Input::get('body_pref');

		if (Input::has('newPass')) {
			$user->password = Input::get('newPass');
			Session::flash('successMessage', 'Your password was updated.');
		}

		$user->save();

		Log::info('User ' . $id . ' updated successfully.');

		Session::flash('successMessage', 'Your account was updated successfully!');

		return Redirect::action('UsersController@show', $id);
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	// public function index()
	// {
	// 	$users = User::all();

	// 	return View::make('users.index', compact('users'));

	// }
}