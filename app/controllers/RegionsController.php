<?php

class RegionsController extends \BaseController {

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
	 * Display a listing of regions
	 *
	 * @return Response
	 */
	public function index()
	{

		$regions = Region::all();

		return View::make('regions.index', compact('regions'));
	}

	/**
	 * Display the specified region.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$region = Region::findOrFail($id);

		$query = Coffee::where('region_id', $id);
		// dd($coffees);

		$search = Input::get('search');
		if($search) {
			$query->where('name', 'like', "%$search%");
		}

		$coffees = $query->orderBy('name')->paginate(10);
		
		return View::make('regions.show', compact('region', 'coffees'));
	}

	/**
	 * Show the form for creating a new region
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check() && Auth::user()->role_id == 1) {

			return View::make('regions.create');
		} else {
			Session::flash('errorMessage', 'You do not have permission to access that page.');
			return Redirect::action('RegionsController@index');
		}
	}

	/**
	 * Store a newly created region in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Region::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$region = new Region();

		$region->name 	 	   = Input::get('name');
		$region->description   = Input::get('description');

		if (Request::hasFile('map')) {
		    $img = Imageupload::upload(Request::file('map'));
		    
			$region->map_url = '/' . $img['original_filedir'];
		}

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));
		    
			$region->img_url = '/' . $img['original_filedir'];
		}

		$region->save();

		return Redirect::action('RegionsController@show', $region->id);
	}

	/**
	 * Show the form for editing the specified region.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if(Auth::check() && Auth::user()->role_id == 1) {
	 		$region = Region::find($id);

			return View::make('regions.edit', compact('region'));
		} else {
			Session::flash('errorMessage', 'You do not have permission to access that page.');
			return Redirect::action('RegionsController@index');
		}
	}

	/**
	 * Update the specified region in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::all(), Region::$editRules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$region = Region::findOrFail($id);

		$region->name 	 	   = Input::get('name');
		$region->description   = Input::get('description');

		if (Request::hasFile('map')) {
		    $img = Imageupload::upload(Request::file('map'));
		    
			$region->map_url = '/' . $img['original_filedir'];
		} else {
			$region->map_url = $region->map_url;
		}

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));
		    
			$region->img_url = '/' . $img['original_filedir'];
		} else {
			$region->img_url = $region->img_url;
		}

		$region->save();

		return Redirect::action('RegionsController@show', $id);
	}

	/**
	 * Remove the specified region from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	Region::destroy($id);

	// 	return Redirect::route('regions.index');
	// }

}
