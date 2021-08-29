@extends('layouts.navbar')


@section('content')
<table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
    <thead>
        <tr>
            <th class="bg-primary">Student Id </th>
            <th class="bg-primary">Student Name </th>
            <th class="bg-danger ">Father Name</th>

        </tr>
    </thead>



@forelse ($section->student as $stu)
<tr>
    <td>{{$stu->id}}</td>
    <td>{{$stu->name}}</td>
    <td>{{$stu->father_name}}</td>
</tr>
@empty
<tr>
    <td>No Student Found</td>

</tr>
@endforelse



@endsection
