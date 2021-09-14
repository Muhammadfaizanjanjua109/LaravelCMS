<?php

namespace App\Http\Controllers;

use App\Models\clasec;
use App\Models\section;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index()
    {


        $student=student::all()->sortBy('id');
        return view('student.index',compact('student'));

    }


    /**
         * Show the form for creating a new resource.
         * @return \Illuminate\Http\Response

    */
     public function create()
    {
        $section = clasec::all();
        return view('student.create', compact('section'));

    //

    }
    /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request   $request
         * @return \Illuminate\Http\Response
         */
    public function store(Request $request)
    {
        $stu = new Student;
        $stu->name =$request->name;
        $stu->father_name =$request->father_name;
        $stu->Adress =$request->Adress;
        $stu->CNIC =$request->CNIC;
        $stu->section_id =$request->section_id;
        $stu->clasec_id =2;
        $stu->save();
        return view('layouts.homecomponent');
    }
    /**
         * Display the specified resource.
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function show($id)
    {

      //
      $student = student::find($id);
        return view('student.studentfullpage',compact('student'));


    }
    /**
         * Show the form for editing the specified resource.
         * @param  int  $id
         * @return  \Illuminate\Http\Response
         */
     public function edit($id)

    {

    //

    }
    /**
         * Update the specified resource in storage.
         * @param  \Illuminate\Http\Request   $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
     public function update(Request $request, $id)
    {

    //

    }
    /**
         * Remove the specified resource from storage.
         * @param  int  $id
         * @return  \Illuminate\Http\Response
         */
     public function destroy($id)
     {

     }




}
