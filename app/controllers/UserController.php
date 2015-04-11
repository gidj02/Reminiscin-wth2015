<?php

class UserController extends \BaseController {

	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD
		return View::make('page/signup');
=======
		return View::make('page/register');
>>>>>>> 786cbba251dc0dbe5a09ac4ad22af65d2a98960a
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()){
			return Redirect::route('user.create')->withInput()->withErrors($validator->messages());
		}
		else{
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->email = Input::get('email');
			$user->contact = Input::get('contact');
			$user->save();			
		}

<<<<<<< HEAD
		return Redirect::route('login');
=======
		return Redirect::route('index');
>>>>>>> 786cbba251dc0dbe5a09ac4ad22af65d2a98960a
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
