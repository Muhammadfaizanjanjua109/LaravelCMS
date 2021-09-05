@extends('layouts.navbar')


@section('content')



<style>

    td{
        font-family: 'Bitter', serif;
    }
</style>



<table style="width:100%" class=" table table-bordered table-hover table table-sm table-striped">
    <thead>
        <tr class="bg-primary">
            <th >Section ID</th>
            <th >Section Name</th>
            <th >Total Students in Sections</th>
        </tr>
    </thead>
    <tbody>



        <h1 style="font-family: 'Trirong', serif;" class="h1 bg-success content-center text-center bg-warning">{{$class->name}}</h1>
             {{-- @foreach($class->section as $section) --}}
<td><td>{{$teacher->name}}</td></td>

                {{-- @endforeach --}}
















@endsection
