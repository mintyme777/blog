@extends('layout')

@section('title')
	Gallery
@stop

@section('head')
	Gallery Page
@stop

@section('content')
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>

<h3>
    <div class="demo" data-in-effect="bounce">
        <p>This is the Gallery page.</p>
    </div>  
</h3> 
  <br> 

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ URL::to('/images/pic1.jpeg') }}">
    </div>

    <div class="item">
      <img src="{{ URL::to('/images/pic2.jpeg') }}" alt="">
    </div>

    <div class="item">
      <img src="{{ URL::to('/images/pic3.jpeg') }}" alt="">
    </div>

    <div class="item">
      <img src="{{ URL::to('/images/pic4.jpeg') }}" alt="">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@stop