@extends('layout.user_master')

@section('contents')
<div class="container">
<div class="col-lg-12">
	<h1 class="page-header">Itinerary</h1>
</div>

<div class="row">
	@foreach($itinerary as $value)
	<div class="col-lg-3 col-md-4 col-xs-6 thumb" id="itenerarylist">
	    <a class="thumbnail" href="{{ URL::to('item/' . $value->id) }}">
	        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
	    </a>
	</div>
	@endforeach

	<div class="col-lg-3 col-md-4 col-xs-6 thumb itemter">
	    <a class="thumbnail" href="{{ URL::to('itinerary/create/' . $user->id) }}" id="additenerary">
	        <span class="center glyphicon glyphicon-plus addter"></span>
	    </a>
	</div>

</div>

</div>

@stop
