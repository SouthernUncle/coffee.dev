<?php

class Review extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reviews';

	/**
	 * Relationships
	 *
	 */
	public function reviewFlavors()
	{
		return $this->belongsToMany('Flavor', 'review_flavor', 'review_id', 'flavor_id')->withTimestamps();
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function coffee()
	{
		return $this->belongsTo('Coffee');
	}

	public function parameter()
	{
		return $this->hasOne('Parameter');
	}


	//Rules
	public static $rules = [];

	// Calculations
	public static function convertToGrams($number)
	{
		$figure = round($number * 28.35);
		return $figure;
	}

	public static function convertToOunces($number)
	{
		$figure = round($number / 28.35);
		return $figure;
	}

	public function weightedScore()
	{
		// Calculates weighted average for each review
		$score = 	($this->flavor * .27) + ($this->aroma * .24) + 
					($this->aftertaste * .22) + ($this->balance * .2) + 
					($this->roast * .02) + ($this->body * .03) + 
					($this->acidity * .02);
		$roundedScore = round($score, 2);
		return $roundedScore;
	}

	public function ratingsDev()
	{
		$overall = $this->coffee->overallCoffeeRating();
		$ws = $this->weightedScore();
		$rDev = round((($ws / $overall) - 1) * 100, 2);
		return $rDev;
	}

}