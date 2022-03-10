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


 function fetch(Request $request)
{
if($request->ajax())
{
$output="";
$products=DB::table('users')->where('firstname','LIKE','%'.$request->supervisorName."%")->get();
if($products)
{
    $output = '<ul class="dropdown-menu" style="display:block; position:relative;">';
foreach ($products as $key => $product) {
$output.= '<li style="margin:10px;">'.$product->firstname .' '. $product->lastname.'</li>';
}
$output .= '</ul>';
return Response($output);
   }
   }
}


}

