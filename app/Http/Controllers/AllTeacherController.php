<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class AllTeacherController extends Controller
{

    public function add_teacher()
    {
    	return view('admin.add_teacher');
    }
    public function save_teacher(Request $request)
    {
    	$data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_phone']=$request->teacher_phone;
        $data['teacher_address']=$request->teacher_address;
        $data['teacher_department']=$request->teacher_department;
        $image = $request->file('teacher_image');

         				  // echo "<pre>";
               //             print_r($data);
               //             echo "</pre>";
               //             exit();
        if($image){
            $image_name=str_random(20);
            $extension =  $request->file('teacher_image')->getClientOriginalExtension(); 
            $fileName =  $image_name.'.jpg';
            $upload_path='image/';
            $img_url=$upload_path.$fileName;
            $success=$image->move($upload_path,$fileName);//**************
                                                        // Resizing 340x340
        //  Image::make( $file->getRealPath() )->fit(400, 400)->save( base_path().'/public/memberAddmission/'.$fileName);
        // }

        // $image=$request->file('teacher_image');
        // if($image)
        // {
        //  $image_name=str_random(20);
        //  $ext=strtolower($image->getClientOriginalExtension());
        //  $img_full_name=$image_name.".".$ext;
        //  $upload_path='image/';
        //  $img_url=$upload_path.$img_full_name;
        //  $success=$image->move($upload_path,$image_name);
            if($success)
            {
                $data['teacher_image']=$img_url;
                DB::table('tbl_teacher')->insert($data);
                Session::put('message', 'Teacher added Successfully !');
                return Redirect::to('/add-teacher');
                         // echo "<pre>";
                         // print_r($ext);
                         // echo "</pre>";
                         // exit();
            }
        }
        $data['teacher_image']='';
        DB::table('tbl_teacher')->insert($data);
        Session::put('message', 'Teacher added Successfully Without Image !');
        return Redirect::to('/add-teacher');
    }

    public function all_teacher()
    {
    	$all_teacher_info = DB::table('tbl_teacher')->get();
    	$manage_teacher   = view('admin.all_teacher')->with('all_teacher_info', $all_teacher_info);

    	return view('layout')
    				->with('all_teacher', $manage_teacher);
    }

    public function view_teacher($teacher_id)
    {
        $teacher_view = DB::table('tbl_teacher')
                        ->select('*')
                        ->where('teacher_id', $teacher_id)
                        ->first();

        $manage_teacher   = view('admin.teacher_view')->with('teacher_view', $teacher_view);

        return view('layout')
                    ->with('teacher_view', $manage_teacher);
    }

     public function delete_teacher($teacher_id)
    {
        DB::table('tbl_teacher')
                 ->where('teacher_id', $teacher_id)
                 ->delete();

        return Redirect::to('/all-teacher');
        // return view('admin.all_student');
    }

}
