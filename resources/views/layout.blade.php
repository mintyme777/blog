<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
        <title>@yield('title')</title> 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}"> 

    </head>
	<body>
		@include('header')
		<h1>
		@yield('head')
		</h1>

	@yield('content')
	</body>
 </html>
