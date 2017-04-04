<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
		 public function getIndex(){
 		//return "Working Home page!";
 		return view('home', ['title' => "Welcome to Heff's Hives", 'headerImg' => 'homeHeader']);
 	}

  public function getLogin()
  {
    return view('auth/login');
  }

  public function getRegister()
  {
    return view('auth/register');
  }

}
