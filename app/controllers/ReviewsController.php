<?php

class ReviewsController extends \BaseController {

	/**
	 * Set up filters.
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('show')));	
	}

	/**
	 * Show the form for creating a new review
	 *
	 * @return Response
	 */
	public function create()
	{
		$roasters = Roaster::all();
		$categories = FlavorCategory::orderBy('name')->get();

		return View::make('reviews.create', compact('roasters', 'categories'));
	}

	public function createFromCoffee($id)
	{
		$coffee  = Coffee::where('url_name', $id)->firstOrFail();
		$roaster = Roaster::where('id', $coffee->roaster_id)->get();
		$categories = FlavorCategory::orderBy('name')->get();

		return View::make('reviews.createFromCoffee', compact('coffee', 'roaster', 'categories'));
	}

	/**
	 * Store a newly created review in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Review::$rules);

		$dropdownValues = array('roaster', 'coffee', 'flavor1', 'flavor2', 'flavor3', 'category1', 'category2', 'category3');

		foreach($dropdownValues as $input)  {
			$input = Input::get($input);

			if($input == 0) {
				Session::flash('errorMessage', "All fields not marked 'optional' are required.");
				return Redirect::back()->withErrors($validator)->withInput();
			} 
		}
		
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$query = Review::where('user_id', Auth::id())->where('coffee_id', Input::get('coffee'));

		if(!is_null($query)) {
			Session::flash('errorMessage', 'You\'ve already reviewed that coffee. Please edit your existing review instead of creating a new one.');
			return Redirect::action('UsersController@show', Auth::user()->username);
		} else {

			$review = new Review();
			$review->user_id	    = Auth::id();
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

			if(Input::has('grind') || 
				Input::has('water_weight') || 
				Input::has('coffee_weight') || 
				Input::has('brew_time') || 
				Input::has('water_temp') || 
				Input::has('brewer') || 
				Input::has('roast_date') ||
				Input::has('method')) {
				
				$param = new Parameter();

				if(Input::has('roast_date')) {
					$input 		= Input::get('roast_date');
					$date  		= date_create($input);
					$roast_date = date_format($date, 'Y-m-d');
					$param->roast_date		= $roast_date;
				}

				$param->review_id		= $review->id;
				$param->grind 			= (Input::has('grind') ? Input::get('grind') : null);
				$param->water_weight	= (Input::has('water_weight') ? Input::get('water_weight') : null);
				$param->coffee_weight	= (Input::has('coffee_weight') ? Input::get('coffee_weight') : null);
				$param->brew_time		= (Input::has('brew_time') ? Input::get('brew_time') : null);
				$param->water_temp		= (Input::has('water_temp') ? Input::get('water_temp') : null);
				$param->brewer			= (Input::has('brewer') ? Input::get('brewer') : null);
				$param->method 			= (Input::has('method') ? Input::get('method') : null);
				$param->save();
			}

			return Redirect::action('CoffeesController@show', $review->coffee->url_name);
		}
	}


	public function addFlavorToReview($flavors, $id)
	{
		$r = Review::findOrFail($id);

		$r->reviewFlavors()->sync($flavors);
	}

	/**
	 * Show the form for editing the specified review.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$review = Review::where('id', $id)->firstOrFail();	

		$categories = FlavorCategory::orderBy('name')->get();
		
		if((Auth::id() == $review->user->id) || (Auth::user()->role_id == 1)) {

			return View::make('reviews.edit', compact('review', 'categories'));
		}  else {
			Session::flash('errorMessage', 'You can only edit your own reviews.');
			return Redirect::action('CoffeesController@show', $review->coffee->url_name);
		}		
	}

	/**
	 * Update the specified review in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::only('review'), Review::$editRules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$review = Review::findOrFail($id);

		$review->user_id 		= $review->user_id;
		$review->roaster_id		= $review->roaster_id;
		$review->coffee_id		= $review->coffee_id;
		$review->review 		= (Input::has('review') ? Input::get('review') : $review->review); 
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

		$flavors = [];	

		for($i = 0; $i <= 2; $i++) {
			if (Input::has('flavor' . $i)) {
				$flavor = Input::get('flavor' . $i);
			} else {
				$flavor = $review->reviewFlavors[$i]->id;
			}
			array_push($flavors, $flavor); 
		}

		if(!empty($flavors)) {
			$this->addFlavorToReview($flavors, $review->id);
		}	

		if(Input::has('grind') || Input::has('water_weight') || Input::has('coffee_weight') || 
		Input::has('brew_time') || Input::has('water_temp') || Input::has('brewer') || Input::has('method') || 
		Input::has('roast_date')) {
			
			$query = Parameter::where('review_id', $review->id)->first();

			if(!is_null($query))
			{
			    $param = Parameter::where('review_id', $review->id)->first();
			} else {
				$param = new Parameter();
			}

			$param->review_id		= $review->id;
			$param->grind 			= (Input::has('grind') ? Input::get('grind') : null);
			$param->water_weight	= (Input::has('water_weight') ? Input::get('water_weight') : null);
			$param->coffee_weight	= (Input::has('coffee_weight') ? Input::get('coffee_weight') : null);
			$param->brew_time		= (Input::has('brew_time') ? Input::get('brew_time') : null);
			$param->water_temp		= (Input::has('water_temp') ? Input::get('water_temp') : null);
			$param->brewer			= (Input::has('brewer') ? Input::get('brewer') : null);
			$param->method 			= (Input::has('method') ? Input::get('method') : null);

			if(Input::has('roast_date')) {
				$input 		= Input::get('roast_date');
				$date  		= date_create($input);
				$roast_date = date_format($date, 'Y-m-d');
				$param->roast_date		= $roast_date;
			}

			$param->save();
		}

		return Redirect::action('CoffeesController@show', $review->coffee->url_name);
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

		Session::flash('successMessage', 'Your review was successfully deleted.'); 
		return Redirect::action('UsersController@show', Auth::user()->username);
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

	/**
	 * Display a listing of reviews
	 *
	 * @return Response
	 */
	// public function index()
	// {
	// 	$reviews = Review::all();

	// 	return View::make('reviews.index', compact('reviews'));
	// }


	/**
	 * Display the specified review.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	$review = Review::findOrFail($id);

	// 	return View::make('reviews.show', compact('review'));
	// }
}
