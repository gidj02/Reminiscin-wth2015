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
	                	<li><a href="{{ route('login') }}">Login</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	@yield('contents')


		{{ HTML::script('js/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/script.js') }}

