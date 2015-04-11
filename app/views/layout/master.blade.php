<!-- <html>
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
</html> -->
</html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WTH2015 | Sentiment</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/bootstrap.css')}}

    <!-- Custom CSS -->
    {{ HTML::style('css/stylish-portfolio.css')}}

    <!-- Custom Fonts -->
    {{ HTML::style('font-awesome/css/font-awesome.min.css')}}
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery -->
    {{ HTML::script('js/jquery.js')}}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js')}}

</head>
<body>


