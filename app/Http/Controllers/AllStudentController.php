<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class AllStudentController extends Controller
{
    public function add_student(Request $request)
    {
    	return view('admin.add_student');
    }

    public function all_student()
    {
    	
    	$all_student_info = DB::table('tbal_student')->get();
    	$manage_student   = view('admin.all_student')->with('all_student_info', $all_student_info);

    	return view('layout')
    				->with('add_student', $manage_student);


    }

    public function delete_student($student_id)
    {
        DB::table('tbal_student')
                 ->where('student_id', $student_id)
                 ->delete();

        return Redirect::to('/all-student');
        // return view('admin.all_student');
    }

    public function view_student($student_id)
    {
        $student_view = DB::table('tbal_student')
                        ->select('*')
                        ->where('student_id', $student_id)
                        ->first();

        $manage_student   = view('admin.student_view')->with('student_view', $student_view);

        return view('layout')
                    ->with('student_view', $manage_student);
    }

    public function edit_student($student_id)
    {
        $student_edit = DB::table('tbal_student')
                        ->select('*')
                        ->where('student_id', $student_id)
                        ->first();

        $manage_student   = view('admin.student_edit')->with('student_edit', $student_edit);

        return view('layout')
                    ->with('student_edit', $manage_student);
    }

    public function update_student(Request $request,$student_id)
    {
        $data = array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=$request->student_password;
        $data['student_admissionyear']=$request->student_admissionyear;

        DB::table('tbal_student')
            ->where('student_id', $student_id)
            ->update($data);

        Session::put('message', 'Student Update Successfully');
        return Redirect::to('/all-student');
    }
}
