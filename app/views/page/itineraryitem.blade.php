@extends	('layout.user_master')
@section('contents')

<div class="row">
	<div class="container">
		<!-- Start of time line -->
	    <div class="page-header text-center">
	        <h1 id="timeline"><small>Welcome to your </small><br>{{ $itinerary->name }} </h1>
	    </div>
	    <ul class="timeline">

	    <?php $x = 0; ?>
	

	    @foreach($item as $value)
	    	@if ($x%2 == 0)
	        <li>
	          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <img class="img-responsive" src="{{ '../' .	$value->imgurl }}" />

	            </div>
	            <div class="timeline-body">

	              <p>{{ Str::limit($value->blog, $limit = 255) }}</p>

	            </div>

	            <div class="timeline-footer">
	                
	                <a><h4>{{ $value->name }}</h4></a>
	                <a class="btn btn-small btn-info" href="{{ URL::to('itinerary/view/item/' . $value->id) }}">Continue Reading	</a>
	            </div>
	          </div>
	        </li>
	        @endif

	        @if ($x%2 == 1)
	         <li  class="timeline-inverted">
	          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <img class="img-responsive" src="{{ '../' .	$value->imgurl }}" />

	            </div>
	            <div class="timeline-body">
	              <p>{{ Str::limit($value->blog, $limit = 255) }}</p>

	            </div>

	            <div class="timeline-footer">
	                
	                <a><h4>{{ $value->name }}</h4></a>
	                <a class="btn btn-small btn-info" href="{{ URL::to('itinerary/view/item/' . $value->id) }}">Continue Reading</a>
	            </div>
	          </div>
	        </li>
	        @endif
	        <?php $x = $x + 1; ?>
	    @endforeach
	       
	        @if($x == 0)
	    	<li>
	          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago via Twitter" id=""></i></a></div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />

	            </div>
	            <div class="timeline-body">

	              <p>Hi! You can create your new Itenerary item. You can search a blogs from other users</p>

	            </div>

	            <div class="timeline-footer">
	                
	                <h4>Press Add Item Button</h4>
	            </div>
	          </div>
	        </li>
	    @endif

	        <li class="clearfix" style="float: none;"></li>
	    </ul>

	    {{ Form::open(array('url' => 'item/create/' . $itinerary->id)) }}
	    {{ Form::submit('Add Item', array('class' => 'btn btn-block btn-warning')) }}
		{{ Form::close() }}
	</div>
</div>

@stop
