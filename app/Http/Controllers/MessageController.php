<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['message_body']=$request->message_body;
        //dd($data);
        DB::table('messages')->insert($data);
        Session::put('message','Message Sent successfully!!');
        return Redirect::to('/');
    }
    public function ShowMessages(){
        $all_message=DB::table('messages')->get();
        return view('admin.admin_messages',compact('all_message'));
    }
}
