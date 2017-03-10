<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ServicesController extends Controller{
	public function getIndex(){
		return view('services', ['title' => "Welcome to Our Services Page", 'header' => "We keep the sting<br>out of beekeeping"]);
	}
}
