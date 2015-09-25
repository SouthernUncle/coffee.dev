<?php

class RegionsController extends \BaseController {

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
	 * Show the form for creating a new region
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('regions.create');
	}

	/**
	 * Store a newly created region in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), region::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Region::create($data);

		return Redirect::route('regions.index');
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

		return View::make('regions.show', compact('region'));
	}

	/**
	 * Show the form for editing the specified region.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$region = Region::find($id);

		return View::make('regions.edit', compact('region'));
	}

	/**
	 * Update the specified region in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$region = Region::findOrFail($id);

		$validator = Validator::make($data = Input::all(), region::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$region->update($data);

		return Redirect::route('regions.index');
	}

	/**
	 * Remove the specified region from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Region::destroy($id);

		return Redirect::route('regions.index');
	}

}
