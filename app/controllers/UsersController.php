<?php

class UsersController extends \BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('show')));	
	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index', compact('users'));

	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create(/*$confirmation*/)
	{
		// $query = Invitation::where('confirmation', $confirmation)->first();

		// if(empty($query)) {
		// 	// Log something here
		// 	Session::flash('errorMessage', 'Invalid invitation code.');
		// 	return Redirect::action('HomeController@showHome');
		// }

		// $invite = Invitation::findOrFail($query->id);
		// $invite->confirmation 	= null;
		// $invite->save();

		return View::make('users.create');
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

		$user->role_id = 2;
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->roast_pref = Input::get('roast_pref');
		$user->acid_pref = Input::get('acid_pref');
		$user->body_pref = Input::get('body_pref');
		$user->save();

		return Redirect::route('login');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		$myInvites  = Invitation::where('user_id', Auth::id())->get();
		$remaining 	= 5 - count($myInvites);
		$adminSent  = count($myInvites);
		
		return View::make('users.show', compact('user', 'remaining', 'adminSent'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

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
		$user = User::findOrFail($id);
		$password = Input::get('password');
		$validator = Validator::make(Input::all(), User::$editRules);

		if ($validator->fails()) {
	        Session::flash('errorMessage', 'Hmmm...something went wrong. Please check the message(s) below to fix:');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else if(!$user) {
			Session::flash('errorMessage', 'The user you are looking for does not exist.');
			App::abort(404);
		} else if ((Auth::attempt(array('password' => $password)))) {
			Session::flash('errorMessage', 'Your password was incorrect.');
			return Redirect::back()->withInput()->withErrors($validator);
		} else if ((Input::has('newPass') || Input::has('newPassConfirm')) && (Input::get('newPass') != Input::get('newPassConfirm'))) {
			Session::flash('errorMessage', 'Your passwords did not match');
			return Redirect::back()->withInput()->withErrors($validator);
		}
 
		// updates the edited user
		$user->role_id = $user->role_id;
		$user->email = Input::get('email');
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->roast_pref = Input::get('roast_pref');
		$user->acid_pref = Input::get('acid_pref');
		$user->body_pref = Input::get('body_pref');
		$user->save();

		if (Input::has('newPass')) {
			$user->password = Input::get('newPass');
			Session::flash('successMessage', 'Your password was updated.');
		}

		$user->save();

		Log::info('User ' . $user->id . ' updated successfully.');

		Session::flash('successMessage', 'Your account was updated successfully!');

		return Redirect::route('users.show', $user->id);
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

}
