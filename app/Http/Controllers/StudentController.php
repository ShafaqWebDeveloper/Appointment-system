<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('studentcrud.Read');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentcrud.Insert');
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
            'sname'=>'required',
            'semail'=>'required',
            'smobile'=>'required',
            'spics'=>'required',
        ]);
        $s=new Student();
        $s->sname=$request->input('sname');
        $s->semail=$request->input('semail');
        $s->smobile=$request->input('smobile');
        if($file=$request->file('spics')){
            foreach($request->file('spics') as $pics){
                $name=$pics->getClientOriginalName();
                if($pics->move('img',$name)){
                    $in[]=$name;
                }
                }
                $s->spics=serialize($in);
        }
        $s->save();
        return response()->json(['status'=>2]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $values=Student::all();
        return response()->json([
            'mydata'=>$values
         ]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
