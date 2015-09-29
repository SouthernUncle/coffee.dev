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

	public function ratio()
	{
		return $ratio = round($this->water_weight / $this->coffee_weight, 1);
	}
}