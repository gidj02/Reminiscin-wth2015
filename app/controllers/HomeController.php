<?php

class HomeController extends BaseController {

	public function index()
	{
		if(!Auth::check())
		{
 			return View::make('page/index');
		}

		return View::make('page/indexuser');
	}

}
