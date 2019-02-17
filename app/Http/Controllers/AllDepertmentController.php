<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class AllDepertmentController extends Controller
{
    public function cse_depertment()
    {
    	//return view("admin.cse");
        $cse_student_info = DB::table('tbal_student')
                            ->where(['student_department' => 1])
                            ->get();

        $manage_student   = view('admin.cse')->with('cse_student_info', $cse_student_info);

        return view('layout')
                    ->with('cse', $manage_student);
        // echo "<pre>";
        // print_r($cse_student_info);
    }

    public function bba_depertment()
    {
    	 $bba_student_info = DB::table('tbal_student')
                            ->where(['student_department' => 2])
                            ->get();

        $manage_student   = view('admin.bba')->with('bba_student_info', $bba_student_info);

        return view('layout')
                    ->with('bba', $manage_student);
    }

    public function ece_depertment()
    {
    	 $ece_student_info = DB::table('tbal_student')
                            ->where(['student_department' => 3])
                            ->get();

        $manage_student   = view('admin.ece')->with('ece_student_info', $ece_student_info);

        return view('layout')
                    ->with('ece', $manage_student);
    }

    public function eee_depertment()
    {
         $eee_student_info = DB::table('tbal_student')
                            ->where(['student_department' => 4])
                            ->get();

        $manage_student   = view('admin.eee')->with('eee_student_info', $eee_student_info);

        return view('layout')
                    ->with('eee', $manage_student);
    }

    public function mba_depertment()
    {
    	$mba_student_info = DB::table('tbal_student')
                            ->where(['student_department' => 5])
                            ->get();

        $manage_student   = view('admin.mba')->with('mba_student_info', $mba_student_info);

        return view('layout')
                    ->with('mba', $manage_student);
    }
}
