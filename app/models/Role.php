<?php

class Role extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

	/**
	 * Relationships
	 *
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
}