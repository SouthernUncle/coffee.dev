<?php

class ParametersController extends \BaseController {

	/**
	 * Display a listing of parameters
	 *
	 * @return Response
	 */
	public function index()
	{
		$parameters = Parameter::all();

		return View::make('parameters.index', compact('parameters'));
	}

	/**
	 * Show the form for creating a new parameter
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('parameters.create');
	}

	/**
	 * Store a newly created parameter in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), parameter::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Parameter::create($data);

		return Redirect::route('parameters.index');
	}

	/**
	 * Display the specified parameter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$parameter = Parameter::findOrFail($id);

		return View::make('parameters.show', compact('parameter'));
	}

	/**
	 * Show the form for editing the specified parameter.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$parameter = Parameter::find($id);

		return View::make('parameters.edit', compact('parameter'));
	}

	/**
	 * Update the specified parameter in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$parameter = Parameter::findOrFail($id);

		$validator = Validator::make($data = Input::all(), parameter::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$parameter->update($data);

		return Redirect::route('parameters.index');
	}

	/**
	 * Remove the specified parameter from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Parameter::destroy($id);

		return Redirect::route('parameters.index');
	}

}
