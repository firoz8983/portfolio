<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }


    public function dashboard(){
        return view('admin.admin_dashboard');
    }

    public function admindashboard(Request $request)
    {
       $admin_email=$request->admin_email;
       $admin_password=md5($request->admin_password);
       $result=DB::table('admin')
                   ->where('admin_email',$admin_email)
                   ->where('admin_password',$admin_password)
                   ->first();
                  
                  if ($result){
                    Session::put('admin_name',$result->admin_name);
                    Session::put('admin_id',$result->admin_id);
                     return Redirect::to('/dashboard');
                  }
                  else{
                     Session::PUT('messege','Email or Password Invalid');
                     return Redirect::to('/admin');
                  }

    }
   
}
