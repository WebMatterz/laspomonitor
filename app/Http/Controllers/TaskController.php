<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Task;

use App\Models\User;
use App\Models\Lecturer;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	 return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = "Task";
        $tasks = Task::all();
    //    return response()->json('Success', 200);
       $this->validate($request, [
            'lecturerName' => 'required',
            'supervisorName' => 'required',
            'assignedDate' => 'required',
        ]);
        
        $task = new Task;
        $task->lecturerName = $request->input('lecturerName');
        $task->supervisorName = $request->input('supervisorName');
        $task->assignedDate = $request->input('assignedDate');
        $task->save();

        if($task) {
            return view('AdminPages.success')->with(['title'=>$title, 'tasks'=>$tasks]);
        } else {
            return response()->json('Try again', 404);
        }  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
