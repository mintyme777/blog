@extends('layout')

@section('title')
	Home
@stop

@section('head')
	Home Page
@stop

@section('content')
	<div class="container">
		<h3>
			<div class="demo" data-in-effect="bounce">
				<p>This is the Home page.</p>
			</div>
		</h3>
		<br>

	    @foreach ($people as $person) 
	    	<li>{{ $person }}<br></li>
	    @endforeach
	</div>
@stop

