<?php

namespace App\Http\Controllers;
use DB;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Attendance;

class AttendanceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    return response()->json('Success', 200);
       $this->validate($request, [
            'aFname' => 'required',
            'aLname' => 'required',
            'aEmail' => 'required',
            'lecturer' => 'required',
            'lecturer_img' => 'required',
            'status' => 'required',
        ]);
        
        $attendance = new Attendance;
        $attendance->aFname = $request->input('aFname');
        $attendance->aEmail = $request->input('aEmail');
        $attendance->aLname = $request->input('aLname');
        $attendance->lecturer = $request->input('lecturer');
        $attendance->lecturer_img = $request->input('lecturer_img');
        $attendance->status = $request->input('status');
        $attendance->save();

        if($attendance) {
            return view('UserPages.success');
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
