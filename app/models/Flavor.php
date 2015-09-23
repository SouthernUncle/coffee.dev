<?php

class Flavor extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'flavors';

	/**
	 * Relationships
	 *
	 */
	public function flavorReviews()
	{
		return $this->belongsToMany('Review', 'review_flavor', 'flavor_id', 'review_id')->withTimestamps();
	}

	public function categories()
	{
		return $this->belongsTo('FlavorCategory');
	}
}