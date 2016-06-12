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
	protected $hidden = array('password');

	public function category(){
		return $this->hasMany('Category','user_id');
	}

	public function customer(){
		return $this->hasMany('Customer','user_id');
	}

	public function product(){
		return $this->hasMany('Product','product_id');
	}

	public function provider(){
		return $this->hasMany('Provider','user_id');
	}


}
