<?php

class RegionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /regions
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('regions.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /regions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('regions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /regions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /regions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('regions.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /regions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('regions.edit');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /regions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /regions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}