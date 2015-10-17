<?php

class CoffeesController extends \BaseController {

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
	 * Display a listing of coffees
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Coffee::with('roaster');

		$search = Input::get('search');
		if($search) {
			$query->where('name', 'like', "%$search%");
		}

		$coffees = $query->orderBy('name')->paginate(10);

		foreach($coffees as $c) {
			$new = Image::make(public_path() . $c->img_url)->fit(500)->save(public_path() . '/img/fit500' . $c->img_url);
		}

		return View::make('coffees.index', compact('coffees'));
	}

	/**
	 * Show the form for creating a new coffee
	 *
	 * @return Response
	 */
	public function create()
	{
		$roasters = Roaster::orderBy('name')->get();
		$regions = Region::orderBy('name')->get();
		return View::make('coffees.create', compact('roasters', 'regions'));
	}

	public function createFromRoaster($id)
	{
		$roaster = Roaster::findOrFail($id);
		$regions = Region::orderBy('name')->get();
		return View::make('coffees.createFromRoaster', compact('roaster', 'regions'));	
	}

	/**
	 * Store a newly created coffee in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::only('region', 'roaster', 'name', 'description'), Coffee::$rules);

		$dropdownValues = array('region', 'roaster');

		foreach($dropdownValues as $input)  {
			$input = Input::get($input);

			if($input == 0) {
				Session::flash('errorMessage', "All dropdowns are required.");
				return Redirect::back()->withErrors($validator)->withInput();
			} 
		}

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Please fix errors and re-submit:');
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$coffee = new Coffee();
		$coffee->user_id				= Auth::id();
		$coffee->region_id				= Input::get('region');
		$coffee->roaster_id				= Input::get('roaster');
		$coffee->name 					= Input::get('name');
		$coffee->process 				= (Input::has('process') ? Input::get('process') : null);
		$coffee->elevation 				= (Input::has('elevation') ? Input::get('elevation') : null);
		$coffee->roasters_description 	= Input::get('description');

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));
		    
			$coffee->img_url = '/' . $img['original_filedir'];
		}
		
		$coffee->save();


		// Mailgun to send us an email after creation of a new coffee
		// So we can verify accurate info, formatting, etc.
		$data = array(
			'name' 		=> 'New Coffee',
			'email' 	=> 'noreply@beanrate.com',
			'coffee'  	=> Input::get('name'),
			'subject' 	=> 'New Coffee created - ' . Input::get('name'),
			'url'		=> 'http://beanrate.com/coffees/' . $coffee->id
		);

		Mail::send('emails.newcoffee', $data, function($message) {
			$message->from(Input::get('email'), Input::get('name'));
			$message->to('beanrate@gmail.com', 'Admin');
			$message->subject(Input::get('subject'));
		});

		return Redirect::action('ReviewsController@createFromCoffee', $coffee->id);
	}

	/**
	 * Display the specified coffee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$coffee = Coffee::with('reviews')->findOrFail($id);

		$roasters_description = $coffee->roasters_description;
		$parse = new Parsedown();
		$coffee->roasters_description = $parse->text($roasters_description);

		$new = Image::make(public_path() . $coffee->img_url)->fit(500)->save(public_path() . '/img/fit500' . $coffee->img_url);

		$reviews = $coffee->reviews()->paginate(4);

		return View::make('coffees.show', compact('coffee', 'reviews'));
	}

	/**
	 * Show the form for editing the specified coffee.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$u = User::findOrFail(Auth::id());

		if($u->role_id == 1) {
			$coffee = Coffee::find($id);
			$regions = Region::with('coffees')->get();
			$roasters = Roaster::with('coffees')->get();
			return View::make('coffees.edit', compact('coffee', 'regions', 'roasters'));
		} else {
			Session::flash('errorMessage', 'You do not have permission to access that page.');
			return Redirect::action('CoffeesController@index');
		}

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

		$validator = Validator::make($data = Input::only('region', 'roaster', 'name', 'description'), Coffee::$rules);

		$dropdownValues = array('region', 'roaster');

		foreach($dropdownValues as $input)  {
			$input = Input::get($input);

			if($input == 0) {
				Session::flash('errorMessage', "All dropdowns are required.");
				return Redirect::back()->withErrors($validator)->withInput();
			} 
		}

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$coffee->user_id				= Auth::id();
		$coffee->region_id				= Input::get('region');
		$coffee->roaster_id				= Input::get('roaster');
		$coffee->name 					= Input::get('name');
		$coffee->process 				= (Input::has('process') ? Input::get('process') : null);
		$coffee->elevation 				= (Input::has('elevation') ? Input::get('elevation') : null);
		$coffee->roasters_description 	= Input::get('description');

		if (Request::hasFile('file')) {
		    $img = Imageupload::upload(Request::file('file'));
		    
			$coffee->img_url = '/' . $img['original_filedir'];
		} else {
			$coffee->img_url = $coffee->img_url;
		}
		
		$coffee->save();

		// Mailgun to send us an email upon roaster update
		// So we can verify accuracy, formatting, etc.
		$data = array(
			'name' 		=> 'Coffee Update',
			'email' 	=> 'noreply@beanrate.com',
			'coffee'  	=> Input::get('name'),
			'subject' 	=> Input::get('name') . ' has been updated',
			'url'		=> 'http://beanrate.com/coffees/' . $coffee->id
		);

		Mail::send('emails.coffeeupdate', $data, function($message) {
			$message->from(Input::get('email'), Input::get('name'));
			$message->to('beanrate@gmail.com', 'Admin');
			$message->subject(Input::get('subject'));
		});

		return Redirect::action('CoffeesController@show', $id);
	}

	/**
	 * Remove the specified coffee from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function destroy($id)
	// {
	// 	$coffee = Coffee::find($id);
	// 	$coffee->delete();

	// 	return Redirect::route('CoffeesController@index');
	// }

	

}
