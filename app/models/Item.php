<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Item extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	
	public static $rules = ['fileupload' => 'image',
							'name' => 'required|min:6',
							'location' => 'required|min:6',
							'blog' => 'required|min:10',
							'date' => 'required'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'item';
}
