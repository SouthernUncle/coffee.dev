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
		return $this->has('Parameter');
	}
}