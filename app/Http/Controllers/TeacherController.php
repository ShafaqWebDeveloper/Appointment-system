<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldata=Teacher::all();
        return view('Teachercrud.Read',compact('alldata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teachercrud.Insert');
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
            'tname'=>'required',
            'temail'=>'required',
            'tmobile'=>'required',
            'tpic'=>'required',
        ]);
        $t=new Teacher();
        $t->tname=$request->input('tname');
        $t->temail=$request->input('temail');
        $t->tmobile=$request->input('tmobile');
        if($file=$request->file('tpic')){
            $name=$file->getClientOriginalName();
            $pic=rand(1,10000)." ".$name;
            if($file->move('img',$pic)){
                $t->tpic=$pic;
            }
        }
        $t->save();
        return response()->json(['status'=>2]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $values=Teacher::all();
        return response()->json([
            'mydata'=>$values
         ]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher,$tid)
    { 
        $alldata=Teacher::find($tid);
        return view('Teachercrud.Update',compact("alldata"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tid)
    {
        return response()->json([
            'msg'=>$tid,
         ]); 
    //     $data=Teacher::find($id);
    //    $data->tname=$request->input("tname");
    //    $data->temail=$request->input("temail");
    //    $data->tmobile=$request->input("tmobile");
    //    $path='./img/'.$data->tpic;
    //    if(File::exists($path)){
    //     File::delete($path);
    //    }
    //    if($file=$request->file('tpic')){
    //     $name=$file->getClientOriginalName();
    //     $pic=rand(1,10000)." ".$name;
    //     if($file->move('img',$pic)){
    //         $data->tpic=$pic;
    //     }
    // }
    // $data->update();

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher, $tid)
    {
        
        $t=Teacher::find($tid);
        $path='img/'.$t->tpic;
        if(File::exists($path)){
        File::delete($path);
    }
    $t->delete();
    return response()->json([
        'msg'=>2
     ]);    
    }
}
