<?php

class Invitation extends Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'invitations';

	/**
	 * Relationships
	 *
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

	public function generateHash()
	{
		return Hashids::encode(mt_rand(1,1000),mt_rand(1,1000),mt_rand(1,1000),mt_rand(1,1000),mt_rand(1,1000));
	}
}