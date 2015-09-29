<?php

class RoastersController extends \BaseController {

	/**
	 * Display a listing of roasters
	 *
	 * @return Response
	 */
	public function index()
	{

		$roasters = Roaster::all();

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

		return View::make('roasters.show', compact('roaster'));
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
	public function destroy($id)
	{
		Roaster::destroy($id);

		return Redirect::route('roasters.index');
	}

}
