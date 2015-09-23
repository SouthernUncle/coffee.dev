<?php

class FlavorCategory extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'flavor_categories';

	/**
	 * Relationships
	 *
	 */
	public function flavors()
	{
		return $this->hasMany('Flavor');
	}
}