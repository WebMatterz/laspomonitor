<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Lecturer;
use App\Models\Task;
use App\Models\Admin;
use App\Models\Attendance;

class AutocompleteController extends Controller
{
 function index() {

    $title = "Task";
    $lecturers = Lecturer::all();
     return view('AdminPages.task')->with(['title'=>$title, 'lecturers'=>$lecturers]);
 }

 function fetch(Request $request) {
      if($request->get('query')) {
        $query = $request->get('query');
        $data = DB::table('users')->
        where('firstname', 'LIKE', '%($query)%')
        ->get();
        $output = '<ul class="dropdown-menu" style="display:block; position:relative;">';
        foreach($data as $row) {
            $output .= '<li> <a href="#">'.$row->firstname.'</a></li>';
        }
        $output .= '</ul>';
        echo $output;  
     }  
 }

}
