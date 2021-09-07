@extends('layouts.navbar')


@section('content')
<H2 class="h2 center text-center text-capitalize  bg-success">Subject Information </H2>
<br>
<table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
    <thead>
        <tr>
            <th class="bg-primary">Subject Id </th>
            <th class="bg-primary">Subject Name </th>
            <th class="bg-primary">Class of Subject</th>
        </tr>
    </thead>
<tr>
    <td>{{$subject->id}}</td>
    <td>{{$subject->name}}</td>
    <td>{{$subject->clasec->name}} </td>
</tr>
</table>
<br>
<H2 class="h2 center text-center text-capitalize  bg-success">Name of Students Enrolled</H2>
<br>

<table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
    <thead>
        <tr>
            <th class="bg-primary">student Id      </th>
            <th class="bg-primary">Student Name    </th>
            <th class="bg-primary">Name Of Section </th>
        </tr>
    </thead>
<tr>


@foreach ($subject->clasec->section as $stu)
@foreach ($stu->student as $faz)
    <td> {{$faz->id}}            </td>
    <td> {{$faz->name}}          </td>
    <td> {{$stu->section_name}}  </td>

</tr>
@endforeach





@endforeach


</tr>


</table>

<br>

<h4 class="h2 center text-center text-capitalize  bg-success">Course of Content</h4>

@if (Auth::user()->role_id == '2')
<button class="btn btn-primary"> <a style="color:white;margin-right:100px;" href="{{route('coc.create',$subject->id)}}">Add Content of Subject</a></button>
@endif


<table  style="width:100%" class="table table-bordered table-hover table table-sm table-striped">

    <thead>
        <tr>
            <th class="bg-primary"> Number      </th>
            <th class="bg-primary">Topic Name    </th>
            <th class="bg-primary">Detail of Topic </th>
        </tr>
    </thead>

<tr>
@forelse ($subject->CourceOfContent as $faz)
<td> {{$faz->id}}         </td>
<td> {{$faz->topic}}         </td>
<td> {{$faz->description}}         </td>
</tr>
@empty
<h5>No course Content Available</h5>
@endforelse

</table>


@endsection
