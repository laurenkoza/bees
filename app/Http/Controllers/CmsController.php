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
     public function getIndex($serviceid)
     {
      $user = Auth::user();

      $lists = DB::table('tbl_services')->get(['service_id','service_name']);
      // dd($lists);
      $autoFill = DB::table('tbl_services')->where('service_id',$serviceid)->get();
      // dd($autoFill);
      $option = 'servicesUpdate';
      return view('cms', ['title'=>'CMS','autoFill'=>$autoFill,'serviceid'=>$serviceid,'lists'=>$lists,'option'=>$option]);
     }

     public function addService()
     {
       $option = 'submitnewservice';
       return view('cmsAdd', ['title'=>'Add Service','option'=>$option]);
     }

     public function submitNewService()
     {
       $array = [
         'serviceName' => request()->input('serviceName'),
         'servicePrice' => request()->input('servicePrice'),
         'serviceVisits' => request()->input('serviceVisits'),
         'serviceDesc' => request()->input('serviceDesc'),
         'serviceBenefit' => request()->input('serviceBenefit')
       ];

       DB::table('tbl_services')->insert([
         'service_name'=>$array['serviceName'],
         'service_price'=>$array['servicePrice'],
         'service_visits'=>$array['serviceVisits'],
         'service_desc'=>$array['serviceDesc'],
         'service_benefit'=>$array['serviceBenefit']
       ]);
      return redirect('cms/1');

     }

     public function updateServices()
     {
       $array = [
         'service_id' => request()->input('serviceId'),
         'serviceName' => request()->input('serviceName'),
         'servicePrice' => request()->input('servicePrice'),
         'serviceVisits' => request()->input('serviceVisits'),
         'serviceDesc' => request()->input('serviceDesc'),
         'serviceBenefit' => request()->input('serviceBenefit')
       ];

       DB::table('tbl_services')->where('service_id',$array['service_id'])->update([
         'service_name'=>$array['serviceName'],
         'service_price'=>$array['servicePrice'],
         'service_visits'=>$array['serviceVisits'],
         'service_desc'=>$array['serviceDesc'],
         'service_benefit'=>$array['serviceBenefit']
       ]);
      //  dd($dump);
      return redirect('cms/'.$array['service_id']);
     }
}
