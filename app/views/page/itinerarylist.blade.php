@extends('layout.user_master')

@section('contents')
<div class="container">
<div class="col-lg-12">
	<h1 class="page-header">Itinerary</h1>
</div>

<div class="col-lg-3 col-md-4 col-xs-6 thumb" id="itinerarylist">
    <!-- <a class="thumbnail" href="#">
        <img class="img-responsive" src="http://placehold.it/400x300" alt="">
    </a> -->
</div>
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a class="thumbnail" href="{{ URL::to('itinerary/create/' . $user->id) }}" id="additinerary">
        <span class="center glyphicon glyphicon-plus"> </span>
    </a>
</div>

</div>
{{ HTML::script('jquery.js') }}

@stop