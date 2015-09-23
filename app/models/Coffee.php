<?php

class Coffee extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'coffees';

	/**
	 * Relationships
	 *
	 */
	public function reviews()
	{
		return $this->hasMany('Review');
	}

	public function roaster()
	{
		return $this->belongsTo('Roaster');
	}

	public function region()
	{
		return $this->belongsTo('Region');
	}

	public function user()
	{
		return $this->belongsTo('User'); 
	}
}
