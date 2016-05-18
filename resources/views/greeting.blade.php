@extends('layout')

@section('title')
	Greeting
@stop

@section('header')
	Greeting Page
@stop

@section('content')
    Hello 
		<p>{{ $name }}</p>
@stop

