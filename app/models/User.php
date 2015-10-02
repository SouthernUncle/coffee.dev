<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = array('username', 'email', 'password');

	public static $rules = array(
		'email' 		  => 'required|email|max:255|unique:users',
		'username'   	  => 'required|max:32|min:4',
		'password'  	  => 'required|confirmed|min:8'
	);

	/**
	 * Relationships
	 *
	 */
	public function reviews()
	{
		return $this->hasMany('Review');
	}

	public function coffees()
	{
		return $this->hasMany('Coffee');
	}

	public function roasters()
	{
		return $this->hasMany('Roaster');
	}

	public function invitations()
	{
		return $this->hasMany('Invitation');
	}

	/**
	 * Password hashing
	 *
	 */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

	/**
	 * Username standard as lowercase for comparison
	 *
	 * @var string
	 */
	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

}
