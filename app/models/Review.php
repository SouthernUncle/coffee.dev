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
}