<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
     public function logout()
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/backend');
    }
//Admin Login dashboard......
    public function admin_dashboard()
    {
        return view("admin.dashboard");
    }

    public function login_dashboard(Request $request)
    {
    	

    	$admin_email    = $request->admin_email;
    	$admin_password = md5($request->admin_password);
    	$result   = DB::table('admin_tbl')
    				->where('admin_email', $admin_email)
    				->where('admin_password', $admin_password)
    				->first();

    				 // echo "<pre>";
    			  //    print_r($result);
    				
                 if($result)
    				 {
    				 	  Session::put('admin_name', $result->admin_name);
    				 	  Session::put('admin_id', $result->admin_id);
    				 	  return Redirect::to('/admin-dashboard');
    				 }
    				 else
    				 {
    				 	Session::put('message', "Email Or password Invaliad");
    				 	return Redirect::to('/backend');
    				 }
    
    }
//Profile and setting
    public function view_profile()
    {
        return view('admin.view_profile');
    }

    public function setting()
    {
        return view('admin.setting');
    }

    


}
