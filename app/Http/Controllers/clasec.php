<?php

namespace App\Http\Controllers;

use App\Models\clasec as ModelsClasec;
use Illuminate\Http\Request;

class clasec extends Controller
{
    public function index()
    {
        $class=ModelsClasec::all();
        return view('class.index',compact('class'));

    }


    /**
         * Show the form for creating a new resource.
         * @return \Illuminate\Http\Response

    */
     public function create()
    {
        $class=ModelsClasec::all();
        return view('class.create', compact('class'));
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
        $stu = new ModelsClasec();
        $stu->name =$request->name;
        $stu->save();
        return view('home');
    }
}

