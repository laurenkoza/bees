<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
	public function getIndex(){
		//return "Working Home page!";
		return view('home', ['title' => "Welcome to Heff's Hives", 'headerImg' => 'homeHeader']);
	}
}
