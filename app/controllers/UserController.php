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
		return View::make('page/register');
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
			$users = new User;
			$users->username = Input::get('username');
			$users->password = Hash::make(Input::get('password'));
			$users->firstname = Input::get('firstname');
			$users->middlename = Input::get('middlename');
			$users->lastname = Input::get('lastname');
			$users->email = Input::get('email');
			$users->contact = Input::get('contact');
			$users->save();			
		}
		return Redirect::route('index');
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
