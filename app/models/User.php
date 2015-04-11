<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

		$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('contact');
			$table->string('email')->unique();
			$table->timestamps();
			$table->rememberToken();
	public static $rules = ['username' => 'required|min:6',
							'password' => 'required|min:6|confirmed',
							'password_confirmation' => 'required|min:6',
							'firstname' => 'required|min:2',
							'middlename' => 'required|min:2',
							'lastname' => 'required|min:2',
							'contact' => 'required|min:11',
							'email' => 'required|min:10|email'];	

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
