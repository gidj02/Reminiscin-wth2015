<html>
	<head>
		<title> User Page </title>
		{{ HTML::style('css/bootstrap.min.css')}}
		{{ HTML::style('css/styles.css')}}
	</head>
		<body>
	 	<nav class="navbar navbar-inverse navbar-fixed">
	        <div class="container-fluid">
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            {{ Form::open(['route' => 'search']) }}
	            	<ul class="nav navbar-nav navbar-right">		
            			<li>{{ Form::submit('Search', array('class' => 'btn btn-block btn-warning')) }}</li>::
	            		<li>{{ Form::text('search', '', array('placeholder' => 'Search' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}</li>
	            			{{ Form::close() }}
	            		<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->username . ' ' }}<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
	            	</ul>
	                <ul class="nav navbar-nav navbar-left">
	                	<li class="active"><a href="{{ route('index') }}">WTH2015</a></li>
	                    	<li><a href="{{ URL::to('itinerary/' . Auth::id()) }}">Show Itenerary</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	@yield('contents')


		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/script.js') }}

