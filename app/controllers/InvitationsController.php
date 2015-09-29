<?php

class InvitationsController extends \BaseController {

	/**
	 * Display a listing of invitations
	 *
	 * @return Response
	 */
	public function index()
	{
		$invitations = Invitation::all();

		return View::make('invitations.index', compact('invitations'));
	}

	/**
	 * Show the form for creating a new invitation
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('invitations.create');
	}

	/**
	 * Store a newly created invitation in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), invitation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Invitation::create($data);

		return Redirect::route('invitations.index');
	}

	/**
	 * Display the specified invitation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$invitation = Invitation::findOrFail($id);

		return View::make('invitations.show', compact('invitation'));
	}

	/**
	 * Show the form for editing the specified invitation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$invitation = Invitation::find($id);

		return View::make('invitations.edit', compact('invitation'));
	}

	/**
	 * Update the specified invitation in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$invitation = Invitation::findOrFail($id);

		$validator = Validator::make($data = Input::all(), invitation::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$invitation->update($data);

		return Redirect::route('invitations.index');
	}

	/**
	 * Remove the specified invitation from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Invitation::destroy($id);

		return Redirect::route('invitations.index');
	}

	public function emailInvite()
	{
		if(!Input::all()) {
			Session::flash('errorMessage', 'You were missing some info there...');
			Redirect::back()->withInput();
	    }
		
		$data = array(
			'name' => Input::get('name'),
			'email_address' => Input::get('email'),
			'body' => Input::get('message')
		);
			
		Mail::send('emails.contact', $data, function($message) {
			$message->from(Input::get('email'), Input::get('name'));
			$message->to('david@gcollier.me', 'David G. Collier');
			$message->subject('Email from dgcollier.com');
		});
		Session::flash('successMessage', 'Your email was sent to the developer.');
		return Redirect::action('HomeController@showHome');			
	}

}
