<?php

class InvitationsController extends BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth');	
	}

	/**
	 * Show the form for creating a new invitation
	 *
	 * @return Response
	 */
	public function create()
	{
		$myInvites  = Invitation::where('user_id', Auth::id())->get();
		$count 		= count($myInvites);

		if (Auth::user()->role_id = 1) {
			return View::make('invitations.create');
		}

		if($count >= 5) {
			Session::flash('errorMessage', 'You have used all of your invitations. Check back more for later.');
			return Redirect::action('UsersController@show', Auth::user()->username);
		}

		return View::make('invitations.create');
	}

	public function emailInvite()
	{
		if(!Input::all()) {
			Session::flash('errorMessage', 'You were missing some info there...');
			Redirect::back()->withInput();
	    }

		$userEmails = User::select('email')->get();
		$invited	= Invitation::select('email')->get();

		foreach($userEmails as $e) {
			if (Input::get('email') == $e->email) {
				Session::flash('errorMessage', 'This email is in use or has already been invited.');
				return Redirect::back()->withInput(); 
			}
		}

		foreach($invited as $i) {
			if (Input::get('email') == $i->email) {
				Session::flash('errorMessage', 'This email is in use or has already been invited.');
				return Redirect::back()->withInput(); 
			}

		}
		
		$invite = new Invitation();

		$invite->email   = Input::get('email');
		$invite->user_id = Auth::id();

		$invite->confirmation = md5(Input::get('email') . Auth::id());

		$invite->save();

		$data = array(
			'name' => Input::get('name'),
			'email_address' => Input::get('email'),
			'confirmation'  => md5(Input::get('email') . Auth::id())
		);

		Mail::send('emails.invite', $data, function($message) {
			$message->from('postmaster@sandbox6bf8d9af287f40889101d1fa77058dc8.mailgun.org', 'BeanRate.com');
			$message->to(Input::get('email'), Input::get('name'));
			$message->subject('Welcome to Bean Rate!');
		});
		Session::flash('successMessage', 'Your invite was sent.');
		return Redirect::action('UsersController@show', Auth::user()->username);			
	}

	/**
	 * Store a newly created invitation in storage.
	 *
	 * @return Response
	 */
	// public function store()
	// {
	// 	$validator = Validator::make($data = Input::all(), invitation::$rules);

	// 	if ($validator->fails())
	// 	{
	// 		return Redirect::back()->withErrors($validator)->withInput();
	// 	}

	// 	Invitation::create($data);

	// 	return Redirect::route('invitations.index');
	// }

	/**
	 * Display a listing of invitations
	 *
	 * @return Response
	 */
	// public function index()
	// {
		
	// 	$invitations = Invitation::all();

	// 	return View::make('invitations.index', compact('invitations'));
	// }

	/**
	 * Display the specified invitation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	$invitation = Invitation::findOrFail($id);

	// 	return View::make('invitations.show', compact('invitation'));
	// }

	/**
	 * Show the form for editing the specified invitation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function edit($id)
	// {
	// 	$invitation = Invitation::find($id);

	// 	return View::make('invitations.edit', compact('invitation'));
	// }

	/**
	 * Update the specified invitation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function update($id)
	// {
	// 	$invitation = Invitation::findOrFail($id);

	// 	$validator = Validator::make($data = Input::all(), invitation::$rules);

	// 	if ($validator->fails())
	// 	{
	// 		return Redirect::back()->withErrors($validator)->withInput();
	// 	}

	// 	$invitation->update($data);

	// 	return Redirect::route('invitations.index');
	// }

	/**
	 * Remove the specified invitation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	Invitation::destroy($id);

	// 	return Redirect::route('invitations.index');
	// }

}
