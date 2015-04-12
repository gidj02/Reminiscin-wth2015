<!DOCTYPE>
<html>
	<head>
		<title> User Page </title>
		{{ HTML::style('css/bootstrap.min.css')}}
		{{ HTML::style('css/styles.css')}}
	</head>
		<body>
	 	<nav class="navbar navbar-inverse navbar-fixed">
	        <div class="container-fluid">
	        	<nav class="navbar navbar-inverse">
		  		<div class="container-fluid">

			    <div class="navbar-header">
			    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			      	</button>
			    </div>

		    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      		<ul class="nav navbar-nav">
		        		<li class="active"><a href="{{ route('index') }}">WTH2015</a></li>
		        		<li ><a href="{{ route('user.create') }}">Register</a></li>
		      		</ul>

		      		<ul class="nav navbar-nav navbar-right">
		        		<li>
		            		{{ Form::open(['route' => 'search', 'class' => 'navbar-form navbar-left', 'role' => 'search']) }}
		           			<div class="form-group">
					        	<input type="text" class="form-control" placeholder="Search">
					        </div>
					        <button type="submit" class="btn btn-success">Submit</button>
		           			{{ Form::close() }}
		        		</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->username . ' ' }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ route('logout') }}">Logout</a></li>
							</ul>
						</li>
		      		</ul>
		    	</div>
	  		</div>
		</nav>

	@yield('contents')


		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/script.js') }}
		{{ HTML::script('js/dropzone.js') }}
