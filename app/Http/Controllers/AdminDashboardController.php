<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Lecturer;
use App\Models\Task;
use App\Models\Admin;
use App\Models\Attendance;

class AdminDashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('admin');

    }




public function index(){

	$title = "Dashboard";

	$users = User::orderBy('id','DESC')->take(10)->get();

	return view('AdminPages.index')->with('title',$title)->with('users', $users);

}




public function users(){

	$title = "Users";
	$count = User::count();

	$users = User::orderBy('id','DESC')->get();

	return view('AdminPages.users')->with('title',$title)->with('users', $users)->with('count', $count);

}

public function taskview(){

	$title = "Task View";

	$tasks = Task::orderBy('taskID','DESC')->get();

	return view('AdminPages.taskview')->with('title',$title)->with('tasks', $tasks);

}

public function task(){

	$title = "Task";
	$lecturers = Lecturer::all();
	// return $lecturers = DB::table('lecturers')
       //     ->where('lecturers.id','=', 1)
         //   ->select(DB::raw('concat (lecturerFname," ",lecturerLname) as FullName, id'));
            
 //  $lecturerOptions = array('' => 'Select Lecturer') + $lecturers->pluck('FullName', 'id')->toArray();

  //  return view('AdminPages.task')->with(['title'=>$title, 'lecturers'=>$lecturers]);

}

public function testtask($id){

	$title = "Task";
	$lecturers = Lecturer::all();
	$supervisor = User::find($id);
	// return $lecturers = DB::table('lecturers')
       //     ->where('lecturers.id','=', 1)
         //   ->select(DB::raw('concat (lecturerFname," ",lecturerLname) as FullName, id'));
            
 //  $lecturerOptions = array('' => 'Select Lecturer') + $lecturers->pluck('FullName', 'id')->toArray();

    return view('AdminPages.testtask')->with(['title'=>$title, 'lecturers'=>$lecturers, 'supervisor'=>$supervisor]);

} 

public function testtaskb($id){

	$title = "Task";
	$supervisor = User::all();
	$lecturers = Lecturer::find($id);
	// return $lecturers = DB::table('lecturers')
       //     ->where('lecturers.id','=', 1)
         //   ->select(DB::raw('concat (lecturerFname," ",lecturerLname) as FullName, id'));
            
 //  $lecturerOptions = array('' => 'Select Lecturer') + $lecturers->pluck('FullName', 'id')->toArray();

    return view('AdminPages.testtaskb')->with(['title'=>$title, 'lecturers'=>$lecturers, 'supervisor'=>$supervisor]);

} 

public function lrecord(){

	$title = "Lecturer Record";


	return view('AdminPages.lrecord')->with('title',$title);

}

public function srecord(){

	$title = "Supervisor Record";


	return view('AdminPages.srecord')->with('title',$title);

}

public function success(){

	$title = "Success";

	 return view('AdminPages.success')->with('title', $title);
}


public function newlecturer(){

	$title = "New Lecturer";

    return view('AdminPages.newlecturer')->with('title',$title);

}

public function attendance(){

	$title = "Attendance";

	$attendances = Attendance::orderBy('attendanceid','DESC')->get();

	return view('AdminPages.attendance')->with('title',$title)->with('attendances', $attendances);

}

public function lecturer(){

	$title = "Lecturer";

	$lecturers = Lecturer::orderBy('id','DESC')->get();

	return view('AdminPages.lecturer')->with('title',$title)->with('lecturers', $lecturers);

}

public function paymentview(){

	$title = "Payment";

	$payments = Payment::orderBy('paymentid','DESC')->get();

	return view('AdminPages.paymentview')->with('title',$title)->with('payments', $payments);

}




public function resetpassword(){

    $title = "Password Reset";

    return view('AdminPages.passwordreset')->with('title',$title);

}



public function passwordreset(Request $request){

    if ($request->ajax()) {


       $update = Admin::find(auth()->guard('admin')->user()->id);
       
        $update->password = bcrypt($request->password);
        $save = $update->save();

        if ($save) {
            
            return response('success');

        }else{

            return response('Error, Please Try Again.');

        }
        
        
    }
}







}
