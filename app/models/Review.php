<?php

class Review extends \Eloquent {
	protected $fillable = [];

	public function reviewFlavors()
	{
		return $this->belongsToMany('Flavor', 'review_flavor', 'review_id', 'flavor_id')->withTimestamps();
	}
}