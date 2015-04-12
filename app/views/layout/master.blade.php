<!DOCTYPE>
<html>
	<head>
		<title> WTH2015 </title>
		{{ HTML::style('css/bootstrap.min.css')}}
		{{ HTML::style('css/styles.css')}}
	</head>
		<body>
	 	<nav class="navbar navbar-inverse navbar-fixed">
	        <div class="container-fluid">
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-left">
	                 	<li class="active"><a href="{{ route('index') }}">WTH2015</a></li>
	                	<li ><a href="{{ route('user.create') }}">Register</a></li>
	                </ul>
	                 <ul class="nav navbar-nav navbar-right">
	                 {{ Form::open(['route' => 'user.create']) }}
	            			
            			<!-- <li>{{ Form::submit('Search', array('class' => 'btn btn-block btn-warning')) }}</li>::
	            		<li>{{ Form::text('search', '', array('placeholder' => 'Search' , 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}</li>
	            			{{ Form::close() }} -->
	            		<li>
						        <div class="col-md-10 col-md-offset-3">
						            <form action="" class="search-form">
						                <div class="form-group has-feedback">																																								
						            		<label for="search" class="sr-only">Search</label>
						            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
						              		<span class="glyphicon glyphicon-search form-control-feedback"></span>																																																														
						            	</div>
						            </form>
						        </div>
						</li>
						{{ Form::close() }}
	                	<li><a href="{{ route('login') }}">Login</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	@yield('contents')


		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/script.js') }}

