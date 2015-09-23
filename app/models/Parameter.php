<?php

class Parameter extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'parameters';

	/**
	 * Relationships
	 *
	 */
	public function review()
	{
		return $this->belongsTo('Review');
	}
}