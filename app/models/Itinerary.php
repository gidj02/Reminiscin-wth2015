<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Itinerary extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

		public static $rules = ['fileupload' => 'image',
								'itineraryname' => 'required|min:6',
								'description' => 'required|min:6',];	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'itinerary';
}
	