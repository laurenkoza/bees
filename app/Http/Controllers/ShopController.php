<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class ShopController extends Controller{
	public function getIndex(){

		$products = DB::table('tbl_products')->get();

		// dd($products);

		return view('shop', ['title' => "Our Shop", 'header' => "All Natural<br>Proudly Canadian", 'headerImg' => 'shopHeader','products'=>$products]);
	}
}
