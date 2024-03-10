<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use App\Models\patient;
use Illuminate\Http\Request;

class Usercon extends Controller
{
public function user(){
    $d=doctor::all();
    $p=patient::select('pdate')->get();
    return view('User.index',compact('d','p'));
}
public function about(){
    return view('User.about');
}
public function services(){
    return view('User.services');
}
public function dprofile(){
    $email=session()->get('email');
        if($email){
            $d=doctor::where('demail','=',$email)->get();
            $doc=$d[0]['dname'];
        $p=patient::where('pdoc','=',$doc)->get();
        return view('dprofile',compact('p','d'));
        }
        else{
            echo 'no doctor found';
        }
}
public function pprofile(){
    return view('pprofile');
}
}
