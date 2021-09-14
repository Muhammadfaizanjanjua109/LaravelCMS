@extends('layouts.navbar')


@section('content')
<h2 style="font-family: 'Trirong', serif;"  class="h2 text-center font-weight-bold">Student Personal Details</h2>
<table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
    <thead>
        <tr>
            <th class="bg-primary">Student Id </th>
            <th class="bg-primary">Student Name </th>
            <th class="bg-danger ">Father Name</th>
            <th class="bg-danger ">Student Adress</th>
            <th class="bg-danger ">CNIC</th>

        </tr>
    </thead>



<tr>
<td>{{$student->id}}</td>
<td class="font-weight-bold">{{$student->name}}</td>
<td>{{$student->father_name}}</td>
<td>{{$student->Adress}}</td>
<td>{{$student->CNIC}}</td>
</tr>
</table>

    <br>
    <h2 style="font-family: 'Trirong', serif;"  class="h2 text-center font-weight-bold">Student Class Details</h2>
    <table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
<thead>

    <th  class="bg-primary"> Class Name</th>
    <th  class="bg-primary">Section name</th>
</thead>
<tr>
    <td >{{$student->section->section_name}}</td>
<td>{{$student->section->clasec->name}}</td>
</tr>
</table>


<h2 style="font-family: 'Trirong', serif;"  class="h2 text-center font-weight-bold">Student Subject Details</h2>
<table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
<thead>

<th  class="bg-primary"> Subject Name</th>
<th  class="bg-primary">Subject Marks</th>
</thead>
<tr>
    {{-- @foreach ($student->clasec->subject as $subject)
    <td >{{$subject->name}}</td>
    <td>{{$subject->name}}</td>
    @endforeach --}}
    @forelse ($student->subject as $subject)
    <td >{{$subject->name}}</td>
    @empty
        No Subject Found
    @endforelse
</tr>
</table>

@endsection
