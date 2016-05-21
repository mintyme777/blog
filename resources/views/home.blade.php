@extends('layout')

@section('title')
	Home
@stop

@section('head')
	Home Page
@stop

@section('content')
	<div class="container">
		<p>This is the Home page.</p>

		<br>

	    @foreach ($people as $person) 
	    	<li>{{ $person }}<br></li>
	    @endforeach
	</div>
@stop

