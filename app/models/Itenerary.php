<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Itenerary extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public static $rules = ['iteneraryname' => 'required|min:6'];	

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'itenenary';
}
