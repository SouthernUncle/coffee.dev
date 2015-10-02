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

		$roasters = $query->orderBy('name')->paginate(3);


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
		$validator = Validator::make($data = Input::all(), roaster::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Roaster::create($data);

		return Redirect::route('roasters.index');
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
		$roaster = Roaster::find($id);

		return View::make('roasters.edit', compact('roaster'));
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

		$validator = Validator::make($data = Input::all(), roaster::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$roaster->update($data);

		return Redirect::route('roasters.index');
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
