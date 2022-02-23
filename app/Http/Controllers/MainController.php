<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
use Mail;
use App\Mail\ContactUsMail;


class MainController extends Controller
{
    public function index(){


    	$title = "Home";
    	return view('MainPages.index')->with('title',$title);
    }


public function about(){

	$title = "About Us";

    	return view('MainPages.about')->with('title',$title);

}

 public function grant(){


	$title = "Grant";

	 return view('MainPages.grant')->with('title', $title);
} 

public function tasksuccess(){


	$title = "Task Creation";

	 return view('MainPages.tasksuccess')->with('title', $title);
} 




public function schedule(){

	$title = "Schedule";

    	return view('MainPages.schedule')->with('title',$title);
}




public function contact(){

	$title = "Contact Us";

    //Mail::to('lasisisaheed5@gmail.com', 'ScrabbleConnect')->send(new ContactUsMail('dd', 'dsfasd','sdfasd', 'asdfasf', 'admin'));

    	return view('MainPages.contact')->with('title',$title);
}




public function contactus(Request $request){

    if ($request->ajax()) {
     
        Mail::to($request->email, $request->name)->send(new ContactUsMail($request->email, $request->name, $request->phone, $request->subject, $request->message, 'user'));

         Mail::to('khaleelrahmon@gmail.com', 'FIRAT SRG')->send(new ContactUsMail($request->email, $request->name, $request->phone, $request->subject, $request->message, 'admin'));

         return response('success');


    }
}









}
