<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\doctor;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mail;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$pat=patient::all();
return view('Appointments.table',compact('pat'));
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
        $request->validate([
            'pname'=>'required',
            'pfname'=>'required',
            'pmobile'=>'required',
            'pgen'=>'required',
            'pdoc'=>'required',
            'pdate'=>'required',
            'ptime'=>'required',
            'pemail'=>'required',
            'ppass'=>'required',
            'ppic'=>'required',
            'ppic.*'=>'mimes:jpg,png,jpeg',
            'psymptoms'=>'required',
        ]);
        $d=new patient();
        $d->pname=$request->input("pname");
        $d->pfname=$request->input("pfname");
        $d->pmobile=$request->input("pmobile");
        $d->pgen=$request->input("pgen");
        $d->pdoc=$request->input("pdoc");
        $date=$request->input("pdate");
        $time=$request->input("ptime");
        $pat=patient::where('pdate','=',$date)->where('ptime','=',$time)->count();
        if($pat>=1){
            return response()->json(['date'=>$date]);
        }
        else{
        $d->pdate=$date;
        $d->ptime=$time;
        $d->pemail=$request->input("pemail");
        $d->ppass=$request->input("ppass");
        if($file=$request->file('ppic')){
      $name=$file->getClientOriginalName();
      $g=rand(1,1000)." ".$name;
      if($file->move('imgs',$g)){
         $d->ppic=$g;
      }
    }
    $d->psymptoms=$request->input("psymptoms");
    $d->prole="Patient";
        if($d->save()){
           $l=new login();
           $l->email=$d->pemail;
           $l->pass=$d->ppass;
           $l->role=$d->prole;
           $l->save();
           return response()->json(['status'=>'insert']);
           }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $id)
    {
        $p=patient::find($id);
        $d=doctor::all();
        return view('User.Update',compact('p','d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $p=patient::find($id);
        $email=$p['pemail'];
        $name=$p['pname'];
        $fname=$p['pfname'];
        $mobile=$p['pmobile'];
        $doc=$p['pdoc'];
        $date=$p['pdate'];
        $time=$p['ptime'];
        $data=['name'=>$name,'father name'=>$fname,'mobile no'=>$mobile,'date'=>$date,'time'=>$time,'doctor name'=>$doc];
        $user['to']=$email;
        Mail::send('User.mail',$data,function($message) use ($user){
         $message->to($user['to']);
         $message->subject('Information for your checkup');
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req,$id)
    {
        $p=patient::find($id);
        $img='imgs/'.$p->ppic;
        if(File::exists($img)){
            File::delete($img);
        }
        $p->delete();
        return response()->json(['status'=>2]);
    }
}
