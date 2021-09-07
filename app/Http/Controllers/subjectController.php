<?php

namespace App\Http\Controllers;

use App\Models\clasec;
use App\Models\CourceOfContent;
use App\Models\student;
use App\Models\subject;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subject=subject::all();
        return view('subject.index', compact('subject'));
    //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $class=clasec::all();
        return view('subject.create', compact('class'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $stu = new subject();
        $stu->name =$request->name;
        $stu->clasec_id =$request->clasec_id;
        $stu->save();

        return view('layouts.homecomponent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $subject = subject::find($id)  ;
        return view('subject.subjectfullpage',compact('subject'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the   resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function courceOfContentAdd(Request $request)
    {
    $a= new courceOfContent;
    $a->topic =$request->topic;
    $a->description =$request->description;
    $a->subject_id = $request->subject_id;
    $a->save();
    return view('layouts.homecomponent');

    }

    public function courceOfContentCreate($id)
    {
        $id=$id;
    return view('subject.coc.create',compact('id'));
    }
}
