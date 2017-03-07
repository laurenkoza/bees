<?php

namespace App\Http\Controllers;


class ContactController extends Controller{

	public function getIndex(){
		//return "Working Home page!";
		return view('contact', ['title' => "Contact Form"]);
	}

//Currently, function below is active in the Routes file
/*	public function postMail(){
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
		    //       		    ->to('la_koza04@hotmail.com')
		    //            		->from($data['email']);
		    //});
		    return 'email sent';
		}		
		return redirect()->back()->withErrors($validator->errors())->withInput();
	}*/
}
