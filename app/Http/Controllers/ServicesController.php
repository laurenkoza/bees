<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ServicesController extends Controller{
	public function getIndex(){
		return view('services', ['title' => "Welcome to Our Services Page"]);
	}
}
