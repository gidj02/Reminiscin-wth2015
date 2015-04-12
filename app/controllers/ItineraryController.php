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
	public function store()
	{
		$validator = Validator::make(Input::all(), Itinerary::$rules);
		
		if($validator->fails()){
			return Redirect::route('itenerary.create')->withInput()->withErrors($validator->messages());
		}
		else{
			$destination = public_path() . '\upload\\';
			$thumb_name = str_random(6).'_'.$thumb->getClientOriginalName;
			$uploadSuccess = $this_move($destination,$thumb_name);
			json_encode($destination.$thumb_name);
			
			$itenerary = new Itinerary;
			$itenerary->name = Input::get('iteneraryname');
			$itenerary->review = Input::get('description');
			$itenerary->imgurl = $destination . $thumb_name;
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
		$itinerary = Itinerary::whereUserid($id)->get();
		return View::make('page/itinerarylist', compact('user', 'itinerary'));
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

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param 
	 * @return Response
	 */
	public function upload()
	{
		//
	}

}
