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
			$reviews = $c->reviews()->get();
			if(isset($reviews[0])) {
				$scores[] = $c->overallCoffeeRating();
			}
		}

		if (!empty($scores)) {
			$avg = array_sum($scores) / count($scores);
			return $mainScore = round(($avg * 5) + 50);
		} else {
			return $mainScore = "Not Yet Rated";
		}

	}

	public function getMapLink($address, $city, $state)
	{
		$address = $this->makeMapLink(str_split($address));
		$city = $this->makeMapLink(str_split($city));

		$address = implode('', $address);
		$city = implode('', $city);
		$newAddress = $address . '+' . $city . '+' . $state;

		$url = 'https://www.google.com/maps/place/';
		$string = $url . $newAddress;
		return $string;
	}

	public function makeMapLink($array)
	{
		foreach($array as $key => $value) {
			if ($value == ' ') {
				$array[$key] = '+';
			}
		}

		return $array;
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