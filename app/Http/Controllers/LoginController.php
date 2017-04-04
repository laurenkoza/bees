<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;

use App\User;
// use Validator;
// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{



  // use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

  public function testing()
  {
    $name = request()->input('name');
    $email = request()->input('email');
    $password = request()->input('password');
    if(Auth::attempt(['email'=>$email, 'password'=>$password])){
      // dd(Auth::user());
      return redirect('cms/1');
    }else{
      return redirect('login');
    }
  }

}
