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
	public function create()
	{
		return View::make('page/item');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		return 'view this item';
	}


}
