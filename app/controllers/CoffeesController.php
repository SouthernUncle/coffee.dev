<?php

class CoffeesController extends \BaseController {

	/**
	 * Display a listing of coffees
	 *
	 * @return Response
	 */
	public function index()
	{
		$coffees = Coffee::all();

		return View::make('coffees.index', compact('coffees'));
	}

	/**
	 * Show the form for creating a new coffee
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('coffees.create');
	}

	/**
	 * Store a newly created coffee in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), coffee::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Coffee::create($data);

		return Redirect::route('coffees.index');
	}

	/**
	 * Display the specified coffee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$coffee = Coffee::findOrFail($id);

		return View::make('coffees.show', compact('coffee'));
	}

	/**
	 * Show the form for editing the specified coffee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$coffee = Coffee::find($id);

		return View::make('coffees.edit', compact('coffee'));
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

		return Redirect::route('coffees.index');
	}

	/**
	 * Remove the specified coffee from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Coffee::destroy($id);

		return Redirect::route('coffees.index');
	}

}
