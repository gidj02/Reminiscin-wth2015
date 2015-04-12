<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $fillable = array('username', 'firstname', 'middlename', 'lastname', 'password', 'email', 'contact');
	
	public static $rules = ['username' => 'required|min:6',
							'password' => 'required|min:6|confirmed',
							'password_confirmation' => 'required|min:6',
							'firstname' => 'required|min:2',
							'middlename' => 'required|min:2',
							'lastname' => 'required|min:2',
							'contact' => 'required|min:11',
							'email' => 'required|min:6|email'];	

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

}
