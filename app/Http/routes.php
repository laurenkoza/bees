<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::get('learn', function () {
    return view('welcome');
});
*/

Route::post('mail', function (){

	$data = request()->input(); //ties method and controller into form submission //request is method //puts form input into $data

	$validator = validator()->make($data, [
		'name' => ['required'],
		'email' => ['required'],
		'subject' => ['required'],
		'message' => ['required']
	]);

	if($validator->passes()){
		Mail::raw('text contact message', function($message){
			    $message->subject('bee test')
	                ->to('l_koza3@fanshawec.ca')
	                ->from('theBees@aol.com');

	    //Was trying to pull variables entered from contact form into the email
	    //Mail::raw($data['message'], $data, function($message) use ($data){
		//	     	$message->subject($data['subject'])
	    //        		    ->to('la_koza04@hotmail.com')
	    //            		->from($data['email']);

	    });
	    return 'email sent';
	}

	return redirect()->back()->withErrors($validator->errors())->withInput();

});

/////////////////////////////////////////////
//
//
//	ORDER OF ROUTE LINES VERY IMPORTANT
//	DO NOT CHANGE THE ORDER OF THESES LINES
//	OR THE SITE WILL BREAK
//
//
/////////////////////////////////////////////

//basic pages
Route::controller('contact', 'ContactController');

Route::controller('learn', 'LearnController');

Route::controller('services', 'ServicesController');

Route::controller('shop', 'ShopController');

//login, logout and register function
Route::post('/test', 'LoginController@testing');

Route::get('logout', 'LoginConteoller@logout');

Route::post('/register', 'AuthController@create');

//cms functions
Route::post('cms/servicesUpdate', 'CmsController@updateServices');

Route::get('cms/addservice', 'CmsController@addService');

Route::post('cms/submitnewservice', 'CmsController@submitNewService');

Route::get('/cms/{serviceid}', 'CmsController@getIndex');

Route::get('cmsshop/addproduct', 'CmsController@addShop');

Route::post('cms/deleteservice', 'CmsController@deleteService');

Route::get('cmsshop/{productid}', 'CmsController@showShop');

Route::post('cmsshop/submitnewshop', 'CmsController@submitNewShop');

Route::post('cmsshop/productUpdate', 'CmsController@updateShop');

Route::post('cmsshop/deleteproduct', 'CmsController@deleteShop');

//home page and login and register page displays
Route::controller('/', 'HomeController');

Route::controller('login', 'HomeController');

Route::controller('register', 'HomeController');

Route::auth();
