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
		$categories = FlavorCategory::orderBy('name')->get();

		return View::make('reviews.create', compact('roasters', 'coffees', 'categories'));
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

		$review = new Review();
		$review->user_id	    = 1;
		$review->roaster_id		= Input::get('roaster');
		$review->coffee_id		= Input::get('coffee');
		$review->review 		= Input::get('review'); 
		$review->aroma			= Input::get('aroma');
		$review->flavor 		= Input::get('flavor');
		$review->aftertaste		= Input::get('aftertaste');
		$review->balance		= Input::get('balance');
		$review->roast 			= Input::get('roast');
		$review->body 			= Input::get('body');
		$review->acidity 		= Input::get('acidity');
		$review->price 			= Input::get('price');
		$review->bag_size_grams = Review::convertToGrams(Input::get('bag_size_grams'));

		$review->save();

		$flavor1 = Input::get('flavor1');
		$flavor2 = Input::get('flavor2');
		$flavor3 = Input::get('flavor3');
		
		$flavors = array($flavor1, $flavor2, $flavor3);
		
		$this->addFlavorToReview($flavors, $review->id);

		return Redirect::action('CoffeesController@show', $review->coffee_id);
	}


	public function addFlavorToReview($flavors, $id)
	{
		$r = Review::findOrFail($id);

		$r->reviewFlavors()->sync($flavors);
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
		$categories = FlavorCategory::orderBy('name')->get();

		return View::make('reviews.edit', compact('review', 'categories'));
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

		$flavor1 = Input::get('flavor1');
		$flavor2 = Input::get('flavor2');
		$flavor3 = Input::get('flavor3');
		
		$flavors = array($flavor1, $flavor2, $flavor3);
		
		$this->addFlavorToReview($flavors, $review->id);

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

	public function getCoffees($id)
	{
		$coffees = Coffee::where('roaster_id', $id)->get();

		$options = array();

		foreach ($coffees as $c) {
			$options += array($c->id => $c->name);
		}

		return Response::json($options);
	}

	public function getFlavors($id)
	{
		$flavors = Flavor::where('category_id', $id)->get();

		$options = array();

		foreach ($flavors as $f) {
			$options += array($f->id => ucfirst($f->name));
		}

		return Response::json($options);
	}

}
