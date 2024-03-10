<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class Logincontroller extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginnow(Request $req){
        $email=$req->input('email');
        $pass=$req->input('pass');
        $log=login::where("email","=",$email)->where("pass","=",$pass)->get();
        $role=$log[0]['role'];
        if(@$role=="Admin"){
            session()->put('email',$email);
            return response()->json(['s'=>1]);
        }
        elseif(@$role=="Patient"){
            session()->put('email',$email);
            return response()->json(['s'=>2]);
        }
        elseif(@$role=="Doctor"){
            session()->put('email',$email);
            return response()->json(['s'=>3]);
        }
        else{
            return redirect('/')->with("msg","you are not loged in");
        }
    }
}
