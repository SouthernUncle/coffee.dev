<?php

class RoastersController extends \BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index','show')));	
	}

	/**
	 * Display a listing of roasters
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Roaster::with('coffees');

		$search = Input::get('search');
		if($search) {
			$query->where('name', 'like', "%$search%");
		}

		$roasters = $query->orderBy('name')->paginate(10);


		return View::make('roasters.index', compact('roasters'));

	}

	/**
	 * Show the form for creating a new roaster
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('roasters.create');
	}

	/**
	 * Store a newly created roaster in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Roaster::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Please complete the form before proceeding.');
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$roaster = new Roaster();
		$roaster->user_id		= Auth::id();
		$roaster->name			= Input::get('name');
		$roaster->address		= Input::get('address') ;
		$roaster->city			= Input::get('city');
		$roaster->state			= Input::get('state');
		$roaster->description 	= Input::get('description');
		$roaster->url			= Input::get('url');
		$roaster->facebook		= (Input::has('facebook')	? Input::get('facebook') 	: null);
		$roaster->twitter		= (Input::has('twitter') 	? Input::get('twitter') 	: null);
		$roaster->instagram		= (Input::has('instagram') 	? Input::get('instagram') 	: null);

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));

			$roaster->img_url = '/' . $img['original_filedir'];
		}

		$roaster->save();

		return Redirect::action('CoffeesController@createFromRoaster', $roaster->id);
	}

	/**
	 * Display the specified roaster.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$roaster = Roaster::findOrFail($id);

		$description = $roaster->description;
		$parse = new Parsedown();
		$roaster->description = $parse->text($description);

		$new = Image::make(public_path() . $roaster->img_url)->resize(null, 750, function ($constraint) {
			    $constraint->aspectRatio();
			 	$constraint->upsize();})->save(public_path() . '/img/fit750' . $roaster->img_url);
		
		$coffees = $roaster->coffees()->paginate(5);

		return View::make('roasters.show', compact('roaster', 'coffees'));
	}

	/**
	 * Show the form for editing the specified roaster.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$u = User::findOrFail(Auth::id());

		if($u->role_id == 1) {
			$roaster = Roaster::find($id);

			return View::make('roasters.edit', compact('roaster'));
		} else {

			return Redirect::action('RoastersController@index');
		}
	}

	/**
	 * Update the specified roaster in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$roaster = Roaster::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Roaster::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Please complete the form before proceeding.');
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$roaster->user_id		= Auth::id();
		$roaster->name			= Input::get('name');
		$roaster->address		= Input::get('address') ;
		$roaster->city			= Input::get('city');
		$roaster->state			= Input::get('state');
		$roaster->url			= Input::get('url');
		$roaster->facebook		= (Input::has('facebook') 	? Input::get('facebook') 	: null);
		$roaster->twitter		= (Input::has('twitter') 	? Input::get('twitter')		: null);
		$roaster->instagram		= (Input::has('instagram') 	? Input::get('instagram') 	: null);
		$roaster->description 	= Input::get('description');

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));

			$roaster->img_url = '/' . $img['original_filedir'];
		} else {
			$roaster->img_url = $roaster->img_url;
		}

		$roaster->save();

		return Redirect::action('RoastersController@show', $id);
	}

	/**
	 * Remove the specified roaster from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	Roaster::destroy($id);

	// 	return Redirect::route('roasters.index');
	// }

}
