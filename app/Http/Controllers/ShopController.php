<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ShopController extends Controller{
	public function getIndex(){
		return view('shop', ['title' => "Our Shop", 'header' => "All Natural<br>Proudly Canadian", 'headerImg' => 'shopHeader']);
	}
}
