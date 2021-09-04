<?php

namespace App\Http\Controllers;

use App\Models\clasec;
use App\Models\section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //

    public function index()
    {
        $section=section::all();
        return view('section.index',compact('section'));

    }


    /**
         * Show the form for creating a new resource.
         * @return \Illuminate\Http\Response

    */
     public function create()
    {
        $clasec=clasec::all();
        return view('section.create', compact('clasec'));
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
        $stu = new section;
        $stu->section_name =$request->section_name;
        $stu->clasec_id =$request->clasec_id;
        $stu->save();
        return view('layouts.homecomponent');
    }

    public function show($id)
    {
        $section = section::find($id);
        return view('section.sectionfullpage',compact('section'));
      //
    }
}
