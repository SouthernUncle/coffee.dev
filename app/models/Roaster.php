<?php

class Roaster extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roasters';

	/**
	 * Relationships
	 *
	 */
	public function coffees()
	{
		return $this->hasMany('Coffee');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function overallRoasterScore()
	{
		foreach($this->coffees as $c) {
			$scores[] = $c->overallCoffeeRating();
		}

		$avg = array_sum($scores) / count($scores);

		return $mainScore = round(($avg * 5) + 50);
	}

	public static $rules = array(
		'name' 			=> 'required',
		'address' 		=> 'required',
		'city' 			=> 'required',
		'state' 		=> 'required',
		'url' 			=> 'required',
		'facebook' 		=> 'required',
		'twitter' 		=> 'required',
		'instagram'		=> 'required',
		'description'	=> 'required',
	);

}