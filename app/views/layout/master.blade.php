<html>
	<head>
		<title> WTH2015 </title>
		{{ HTML::style('bootstrap.css')}}
	</head>
		<body>
	 	<nav class="navbar navbar-inverse">
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
		<div class="col-md-6 col-md-offset-3">
			@yield('contents')
		</div>
	</body>
</html>
