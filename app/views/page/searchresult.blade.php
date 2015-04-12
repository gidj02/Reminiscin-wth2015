@extends('layout.user_master')

@section('contents')
<div class="container">
<div class="col-lg-12">
	<h1 class="page-header">Search Results</h1>
</div>

<div class="row">
    @foreach($item as $value)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb" id="itenerarylist">
        <div class="panel panel-default">
        	<div class="panel-body">
        		<a class="thumbnail" href="{{ URL::to('itinerary/view/item/' . $value->id) }}">
            		<img class="img-responsive" src="{{ '/../' . $value->imgurl }}" alt="">
        		</a>
        	</div>
        	<div class="panel-footer">
        		<h5>{{ $value->name }}</h5>
        	</div>
        </div>
    </div>
    @endforeach
</div>

</div>
@stop
