<?php

class ItemController extends \BaseController {


	protected $itinerary;
	protected $item;

	public function __construct(Itinerary $itinerary, Item $item)
	{
		$this->itinerary = $itinerary;
		$this->item = $item;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$filter = Input::get('search');
		$item = Item::where('blog', 'LIKE', '%'.$filter.'%')->get();
		return View::make('page/searchresult', compact('item'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		return View::make('page/item', compact('id'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		$input = Input::all();

		$validation = Validator::make($input,Item::$rules);

		if ($validation->fails())
		{
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$file = Input::file('fileupload');
		if($file != NULL){
			$destinationPath = 'public/img/item'; // upload path
			$path = 'img/item';
			$extension = $file->getClientOriginalExtension(); // getting image extension
			$fileName = $file->getClientOriginalName(); // renameing image
			$upload_success = $file->move($destinationPath, $fileName); // uploading file to given path

	        if( $upload_success ) {
	        	$item = new Item;
				$item->name = Input::get('itineraryname');
				$item->location = Input::get('description');
				$item->blog = $path .'/'. $fileName;
				$item->date = Auth::id();
				$item->imgurl = $path .'/'. $fileName;
				$item->itineraryid = $id;
				$item->save();			
				
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
		$itinerary = $this->itinerary->find($id);
		$item = Item::whereItineraryid($id)->get();
		return View::make('page/itineraryitem', compact('itinerary', 'item'));
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

	public function viewItem($id)
	{
		$item = Item::find($id);
		return View::make('page/itemview', compact('item'));
	}
}
