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
}