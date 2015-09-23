<?php

class Flavor extends \Eloquent {
	protected $fillable = [];

	public function flavorReviews()
	{
		return $this->belongsToMany('Review', 'review_flavor', 'flavor_id', 'review_id')->withTimestamps();
	}
}