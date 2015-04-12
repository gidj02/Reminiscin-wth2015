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
		$input = Input::all();

		$validation = Validator::make($input,Itinerary::$rules);

		if ($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$file = Input::file('fileupload');
		if($file != NULL){
			$destinationPath = 'public/img'; // upload path
			$path = 'img';
			$extension = $file->getClientOriginalExtension(); // getting image extension
			$fileName = $file->getClientOriginalName(); // renameing image
			$upload_success = $file->move($destinationPath, $fileName); // uploading file to given path

	        if( $upload_success ) {
	        	$itinerary = new Itinerary;
				$itinerary->name = Input::get('itineraryname');
				$itinerary->description = Input::get('description');
				$itinerary->imgurl = $path .'/'. $fileName;
				$itinerary->userid = Auth::id();
				$itinerary->save();			
				
	        	return Redirect::to('itinerary/' . Auth::id());
	        } else {
	        	return Redirect::back()->withInput()->withErrors($validation->messages());
	        }
    	}
    	else return 'null ';
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
