<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\User;
use App\Models\Task;
use App\Models\Lecturer;
use App\Attendance;
use App\FriendRequest;

class UserDashboardController extends Controller
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




    public function index(){


        $title = "Dashboard";

         return view('UserPages.index')->with('title', $title);
    }

    public function schedule(){


        $title = "Schedule";
        $tasks = Task::orderBy('taskID','DESC')->get();
         return view('UserPages.schedule')->with('title', $title)->with('tasks', $tasks);
    }

    public function attendance(){


        $title = "Attendance";
        $lecturers = Lecturer::all();
         return view('UserPages.attendance')->with(['title'=>$title, 'lecturers'=>$lecturers]);
    }


    public function success(){


        $title = "Success";

         return view('UserPages.success')->with('title', $title);
    }

    

    

    public function settings(){

        $title = "Settings";

         return view('UserPages.settings')->with('title', $title);
    }

    public function profile(){

        $title = "Profile";

         return view('UserPages.profile')->with('title', $title);
    }

   # public function resetpassword(){

    #    $title = "Password Reset";

     #    return view('auth.passwords.resetpassword')->with('title', $title);
   # }



    public function settingsupdate(Request $request){

        
//        $imageName = time().'.'.$request->image->extension();  

  //      $request->image->move(public_path('images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */

    

  //      if ($request->hasFile('image')) {
   //        $filenameWithExt = $request->file('image')->getClientOriginalName();// Get Filename
 //       $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);// Get just Extension
 //        $extension = $request->file('image')->getClientOriginalExtension();// Filename To store
 //       $fileNameToStore = $filename. '_'. time().'.'.$extension;// Upload Image$path = $request->file(‘image’)->storeAs(‘public/image’, $fileNameToStore);
 //      }  
            // Else add a dummy image
 //      else {
 //           $fileNameToStore = 'noimage.jpg'; 
 //        }
            // Create New Data
   //     if($request->hasFile('image')) {
   //         $request->validate([
   //             'image' => 'mimes:jpeg,bmp,png'
   //         ]);
   //         $request->image->store('image', 'public');
   //     }

  //      if ($request->hasFile('image')) {
  //          $image = $request->file('image');
  //          $imageName = $image->getClientOriginalName();
  //          $image->move('image', $imageName);
  //          $input['image'] = 'images' . $imageName;
  //          $input['filepath'] = "localhost";
    //    }

   //     if ($request->hasFile('cv')) {
   //         $cv = $request->file('cv');
   //         $cvName = $cv->getClientOriginalName();
   //         $cv->move('image', $imageName);
   //         $input['cv'] = 'images' . $cvName;
   //         $input['filepath'] = "localhost";
      //  }


      
        if ($request->ajax()) {
           

           $update = User::find(auth()->user()->id);
           $update->firstname = $request->firstname;
           $update->lastname = $request->lastname;
           $update->username = $request->username;
           $update->email = $request->email;
           $update->designationID = $request->designationID;
           $update->phone_no = $request->phone_no;


           if ($request->password == '') {
             //
           }else{

            $update->password = bcrypt($request->password);

           }

           $save = $update->save();

           if ($save) {
              
return response('success');

           }else{

return response('Error, Try Again Later');

           }

           // return response($request->name);






        }

    }













}
