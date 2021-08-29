@extends('layouts.navbar')


@section('content')




@foreach ($student as $student)
id <h3>{{$student->id}}</h1>
<h3>{{$student->name}}</h1>
<h3>{{$student->father_name}}</h1>
<h3>{{$student->Adress}}</h1>
<h3>{{$student->CNIC}}</h1>
    <br>
    <h1>section name</h1>
<h3>{{$student->section->section_name}}</h3>
<h3>{{$student->section->clasec->name}}</h3>
@endforeach



@endsection
