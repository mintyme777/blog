<?php

// Route::get('/', function () {
// 	$people = ['Taylor', 'Matt', 'Jeffrey'];

//    return view('welcome', compact('people'));
// });

// Route::get('/hello', function() {
// 	   return view('greeting');
// });

Route::get('/', 'PagesController@home');

Route::get('/home', 'PagesController@home');

Route::get('/hello', 'PagesController@hello');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/login', 'PagesController@login');

Route::get('/gallery', 'PagesController@gallery');

