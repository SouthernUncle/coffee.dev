<?php

class ReviewsController extends \BaseController {

	/**
	 * Display a listing of reviews
	 *
	 * @return Response
	 */
	public function index()
	{
		$reviews = Review::all();

		return View::make('reviews.index', compact('reviews'));
	}

	/**
	 * Show the form for creating a new review
	 *
	 * @return Response
	 */
	public function create()
	{
		$roasters = Roaster::all();
		$coffees  = Coffee::all();

		return View::make('reviews.create', compact('roasters', 'coffees'));
	}

	/**
	 * Store a newly created review in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), review::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Review::create($data);

		return Redirect::route('reviews.index');
	}

	/**
	 * Display the specified review.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$review = Review::findOrFail($id);

		return View::make('reviews.show', compact('review'));
	}

	/**
	 * Show the form for editing the specified review.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$review = Review::find($id);

		return View::make('reviews.edit', compact('review'));
	}

	/**
	 * Update the specified review in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$review = Review::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Review::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$review->review 		= Input::get('review'); 
		$review->aroma			= Input::get('aroma');
		$review->flavor 		= Input::get('flavor');
		$review->aftertaste		= Input::get('aftertaste');
		$review->balance		= Input::get('balance');
		$review->roast 			= Input::get('roast');
		$review->body 			= Input::get('body');
		$review->acidity 		= Input::get('acidity');
		$review->price 			= Input::get('price');
		$review->bag_size_grams = Input::get('bag_size_grams');

		$review->save();

		return Redirect::action('CoffeesController@show', $review->coffee_id);
	}

	/**
	 * Remove the specified review from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Review::destroy($id);

		return Redirect::route('reviews.index');
	}
}
