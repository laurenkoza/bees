<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function getIndex()
     {
      $user = Auth::user();
      $email = $user->email;
      $password = $user->password;
      return view('cms', ['email'=>$email, 'password'=>$password, 'title'=>'CMS']);
     }

     public function updateServices()
     {
       $serviceName = request()->input('serviceName');
       $servicePrice = request()->input('servicePrice');
       $serviceVisits = request()->input('serviceVisits');
       $serviceDesc = request()->input('serviceDesc');
       $serviceBenefits = request()->input('serviceBenefits');

       DB::table('tbl_services')->where('service_id',3)->update([
         'service_name'=>$serviceName,
         'service_price'=>$servicePrice,
         'service_visits'=>$serviceVisits,
         'service_desc'=>$serviceDesc,
         'service_benefit'=>$serviceBenefits
       ]);
      //  dd($dump);
     }
}
