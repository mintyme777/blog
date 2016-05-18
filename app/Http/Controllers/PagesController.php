<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home() 
    {
    	$people = ['Taylor', 'Matt', 'Jeffrey'];

    	return view('home', compact('people'));
    }

    public function hello()
    {
    	$myname = "Stuart Biggs";

    	return view('greeting')->with("name", $myname);
    }

    public function login()
    {
        return view('login');
    }

    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}
