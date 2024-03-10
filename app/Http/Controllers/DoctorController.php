<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d=doctor::all();
        return view('Doctor.table',compact('d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Doctor.form');
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
            'dname'=>'required',
            'dfname'=>'required',
            'dgen'=>'required',
            'dspec'=>'required',
            'dmobile'=>'required',
            'demail'=>'required|unique:doctors,demail',
            'dpass'=>'required',
            'dpic'=>'required',
            'dpic.*'=>'mimes:jpg,png,jpeg',
        ]);
        $d=new doctor();
        $d->dname=$request->input("dname");
        $d->dfname=$request->input("dfname");
        $d->dgen=$request->input("dgen");
        $d->dspec=$request->input("dspec");
        $d->dmobile=$request->input("dmobile");
        $d->demail=$request->input("demail");
        $d->dpass=$request->input("dpass");
        $d->drole="Doctor";
        if($file=$request->file('dpic')){
      $name=$file->getClientOriginalName();
      $g=rand(1,1000)." ".$name;
      if($file->move('imgs',$g)){
         $d->dpic=$g;
      }
    }
    if($d->save()){
        $l=new login();
        $l->email=$d->demail;
        $l->pass=$d->dpass;
        $l->role=$d->drole;
        $l->save();
        return response()->json(['status'=>2]);
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(doctor $doctor,$id)
    {
        $alldata=doctor::find($id);
        return view('Doctor.Update',compact("alldata"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $d=doctor::find($id);
        $d->dname=$request->input("dname");
        $d->dfname=$request->input("dfname");
        $d->dgen=$request->input("dgen");
        $d->dspec=$request->input("dspec");
        $d->dmobile=$request->input("dmobile");
        $d->demail=$request->input("demail");
        $d->dpass=$request->input("dpass");
        $d->drole="Doctor";
        if($file=$request->file('dpic')){
      $name=$file->getClientOriginalName();
      $g=rand(1,1000)." ".$name;
      if($file->move('imgs',$g)){
         $d->dpic=$g;
      }
    }
    $d->update();
    if($d->update()){
        $l=new login();
        $l->email=$d->demail;
        $l->pass=$d->dpass;
        $l->role=$d->drole;
        $l->save();
        return response()->json(['status'=>2]);
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(doctor $doctor,$id)
    {
        $p=doctor::find($id);
        $img='imgs/'.$p->dpic;
        if(File::exists($img)){
            File::delete($img);
        }
        $p->delete();
        return response()->json(['status'=>2]);
    }
}
