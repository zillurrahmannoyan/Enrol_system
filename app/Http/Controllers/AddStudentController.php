<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class AddStudentController extends Controller
{
    public function add_student()
    {
    	 return view("admin.add_student");
    }

    public function all_student()
    {
    	echo "all student";
    }

    public function tutionfee()
    {
    	echo "Tution Fee";
    }

    public function result()
    {
    	echo "Result";
    }

    public function save_student(Request $request)
    {
        $data=array();
        $data['student_name']=$request->student_name;
        $data['student_roll']=$request->student_roll;
        $data['student_fathername']=$request->student_fathername;
        $data['student_mothername']=$request->student_mothername;
        $data['student_email']=$request->student_email;
        $data['student_phone']=$request->student_phone;
        $data['student_address']=$request->student_address;
        $data['student_password']=md5($request->student_password);
        $data['student_admissionyear']=$request->student_admissionyear;
        $data['student_department']=$request->student_department;
        $image = $request->file('student_image');

         				  // echo "<pre>";
               //             print_r($data);
               //             echo "</pre>";
               //             exit();
        if($image){
            $image_name=str_random(20);
            $extension =  $request->file('student_image')->getClientOriginalExtension(); 
            $fileName =  $image_name.'.jpg';
            $upload_path='image/';
            $img_url=$upload_path.$fileName;
            $success=$image->move($upload_path,$fileName);//**************
                                                        // Resizing 340x340
        //  Image::make( $file->getRealPath() )->fit(400, 400)->save( base_path().'/public/memberAddmission/'.$fileName);
        // }

        // $image=$request->file('student_image');
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
                $data['student_image']=$img_url;
                DB::table('tbal_student')->insert($data);
                Session::put('message', 'Student added Successfully !');
                return Redirect::to('/add-student');
                         // echo "<pre>";
                         // print_r($ext);
                         // echo "</pre>";
                         // exit();
            }
        }
        $data['student_image']='';
        DB::table('tbal_student')->insert($data);
        Session::put('message', 'Student added Successfully Without Image !');
        return Redirect::to('/add-student');
    }
}
