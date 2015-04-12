<?php

class ItineraryController extends \BaseController {

	protected $user;
	protected $itinerary;

	public function __construct(User $user, Itinerary $itinerary)
	{
		$this->user = $user;
		$this->$itinerary = $itinerary;
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
	public function create($id)
	{
		$user = $this->user->find($id);
		return View::make('page/itineraryform', compact('user'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$validator = Validator::make(Input::all(), Itinerary::$rules);

		if($validator->fails()){
			return Redirect::route('itenerary.create')->withInput()->withErrors($validator->messages());
		}
		else{
			$itenerary = new Itinerary;
			$itenerary->name = Input::get('iteneraryname');
			$itenerary->review = Input::get('description');
			$itenerary->userid = $id;
			$itenerary->save();
		}
		return Redirect::route('itenerary.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{ 
		$user = $this->user->find($id);
		$itinenary = Itinerary::whereUserid($id)->get();
		return View::make('page/itinerarylist', compact('user'));
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
