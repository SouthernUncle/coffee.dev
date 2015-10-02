<?php

class CoffeesController extends \BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));	
	}

	/**
	 * Display a listing of coffees
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Coffee::with('roaster');

		$search = Input::get('search');
		if($search) {
			$query->where('name', 'like', "%$search%");
		}

		$coffees = $query->orderBy('name')->paginate(10);

		foreach($coffees as $c) {
			$new = Image::make(public_path() . $c->img_url)->fit(500)->save(public_path() . '/img/fit500' . $c->img_url);
		}

		return View::make('coffees.index', compact('coffees'));
	}

	/**
	 * Show the form for creating a new coffee
	 *
	 * @return Response
	 */
	public function create()
	{
		$roasters = Roaster::orderBy('name')->get();
		$regions = Region::orderBy('name')->get();
		return View::make('coffees.create', compact('roasters', 'regions'));
	}

	public function createFromRoaster($id)
	{
		$roaster = Roaster::findOrFail($id);
		$regions = Region::orderBy('name')->get();
		return View::make('coffees.createFromRoaster', compact('roaster', 'regions'));	
	}

	/**
	 * Store a newly created coffee in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::only('region', 'roaster', 'name', 'description'), coffee::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Please fix errors and re-submit:');
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$coffee = new Coffee();
		$coffee->user_id				= Auth::id();
		$coffee->region_id				= Input::get('region');
		$coffee->roaster_id				= Input::get('roaster');
		$coffee->name 					= Input::get('name');
		$coffee->process 				= (Input::has('process') ? Input::get('process') : null);
		$coffee->elevation 				= (Input::has('elevation') ? Input::get('elevation') : null);
		$coffee->roasters_description 	= Input::get('description');
		$coffee->active 				= 1;

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));
		    
			$coffee->img_url = '/' . $img['original_filedir'];
		}
		
		$coffee->save();

		return Redirect::action('ReviewsController@createFromCoffee', $coffee->id);
	}

	/**
	 * Display the specified coffee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$coffee = Coffee::with('reviews')->findOrFail($id);

		$new = Image::make(public_path() . $coffee->img_url)->fit(500)->save(public_path() . '/img/fit500' . $coffee->img_url);


		$reviews = $coffee->reviews()->paginate(4);

		return View::make('coffees.show', compact('coffee', 'reviews'));
	}

	/**
	 * Show the form for editing the specified coffee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$u = User::findOrFail(Auth::id());

		if($u->role_id == 1) {
			$coffee = Coffee::find($id);
			return View::make('coffees.edit', compact('coffee'));
		} else {
			return Redirect::action('CoffeesController@index');
		}

	}

	/**
	 * Update the specified coffee in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$coffee = Coffee::findOrFail($id);

		$validator = Validator::make($data = Input::all(), coffee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$coffee->update($data);

		return Redirect::route('CoffeesController@index');
	}

	/**
	 * Remove the specified coffee from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$coffee = Coffee::find($id);
		$coffee->delete();

		return Redirect::route('CoffeesController@index');
	}

	

}
