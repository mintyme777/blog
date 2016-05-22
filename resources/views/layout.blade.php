<!DOCTYPE html>
<html>
    <head>
    
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
        <title>@yield('title')</title> 

    </head>
	<body>
		<div class="container">
			<div class="jumbotron">
				@include('header')
				<h1>
				@yield('head')
				</h1>
			    @yield('content')
			</div>
	    </div>
	</body>
 </html>
