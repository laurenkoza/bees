<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Response;

class ServicesController extends Controller{
	public function getIndex(){

		$services = DB::select('SELECT * FROM tbl_services');
		// $services = Response::json($allServices);
		// dd($services);
		return view('services', ['title' => "Welcome to Our Services Page", 'header' => "We keep the sting<br>out of beekeeping", 'services' => $services, 'headerImg' => 'servicesHeader']);
	}
}
