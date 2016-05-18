@extends('layout')

@section('title')
	Home
@stop

@section('head')
	Home Page
@stop

@section('content')
    @foreach ($people as $person) 
    	<li>{{ $person }}</li>
    @endforeach
@stop

