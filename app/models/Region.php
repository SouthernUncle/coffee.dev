<?php

class Region extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'regions';

	/**
	 * Relationships
	 *
	 */
	public function coffees()
	{
		return $this->hasMany('Coffee');
	}

	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
	);

	public static $editRules = array();
}