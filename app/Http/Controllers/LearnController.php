<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Route;
use DB;
use Response;

class LearnController extends Controller{
	public function getIndex(){
		//return "Learn index page!";
		$facts = DB::select('SELECT * FROM tbl_faq');
		$factDump = Response::json($facts);
		return view('learn', ['title' => "Welcome to Heff's Hives", 'facts' => $factDump, 'header' => "Through nurture<br>we flourish", 'headerImg' => 'learnHeader']);
	}

	public function getBlog(){
		//$currentURL= Route::current();
		//$currentURL = "learn.blog";
		//echo $currentURL;

		return view('blog', ['title' => "Welcome to Heff's Blog"]);
	}
}
