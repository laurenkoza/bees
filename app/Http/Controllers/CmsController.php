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

     // get initial CMS page to edit services
     public function getIndex($serviceid)
     {
      $user = Auth::user();

      $lists = DB::table('tbl_services')->get(['service_id','service_name']);
      // dd($lists);
      $autoFill = DB::table('tbl_services')->where('service_id',$serviceid)->get();
      // dd($autoFill);
      $option = 'servicesUpdate';
      return view('cmsServices', ['title'=>'CMS','autoFill'=>$autoFill,'serviceid'=>$serviceid,'lists'=>$lists,'option'=>$option]);
     }

     // get form to submit new service to the database
     public function addService()
     {
       $option = 'submitnewservice';
       return view('cmsServicesAdd', ['title'=>'Add Service','option'=>$option]);
     }

     // POST method to actually add new service
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

     // POST method to update existing services
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

     // POST route to remove service from database
     public function deleteService()
     {
       $serviceid = request()->input('serviceId');
       DB::table('tbl_services')->where('service_id',$serviceid)->delete();
       return redirect('cms/1');
     }

     // Show form to update products
     public function showShop($productid)
     {
      $lists = DB::table('tbl_products')->get(['product_id','product_name']);
      //  dd($list);
      $autoFill = DB::table('tbl_products')->where('product_id',$productid)->get();
      $option = 'productUpdate';
      return view('cmsShop', ['title'=>'CMS','autoFill'=>$autoFill,'productid'=>$productid,'lists'=>$lists,'option'=>$option]);
     }

     // get form to add new product to the database
     public function addShop()
     {
       $option = 'submitnewshop';
       return view('cmsShopAdd', ['title'=>'Add Product','option'=>$option]);
     }

     // POST method to update product info
     public function updateShop()
     {
       $array = [
         'product_id' => request()->input('productId'),
         'productName' => request()->input('productName'),
         'productDesc' => request()->input('productDesc'),
         'productPrice' => request()->input('productPrice')
       ];

       DB::table('tbl_products')->where('product_id',$array['product_id'])->update([
         'product_name' => $array['productName'],
         'product_desc' => $array['productDesc'],
         'product_price' => $array['productPrice']
       ]);

       return redirect('cmsshop/'.$array['product_id']);
     }

     // POST method to add new product to database
     public function submitNewShop()
     {
       $array = [
         'productName' => request()->input('productName'),
         'productDesc' => request()->input('productDesc'),
         'productPrice' => request()->input('productPrice')
       ];

       DB::table('tbl_products')->insert([
         'product_name' => $array['productName'],
         'product_desc' => $array['productDesc'],
         'product_price' => $array['productPrice']
       ]);

       return redirect('cmsshop/1');
     }

     // POST method to delete shop item
     public function deleteShop()
     {
       $productid = request()->input('productId');
       DB::table('tbl_products')->where('product_id',$productid)->delete();
       return redirect('cmsshop/1');
     }

}
