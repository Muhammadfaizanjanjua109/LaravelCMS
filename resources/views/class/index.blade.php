@extends('layouts.navbar')


@section('content')

    <style>
table, th, td ,tr {
  border: 1px solid black;
}

    </style>
</head>
<body>



    <button class="btn btn-success align-items-center" href=""><a style="  text-decoration: none;color: inherit;" href="{{Route('class.Store')}}"> Create a New Class</a></button>
<br>
<br>
    <table style="width:100%" class=" table table-bordered table-hover table table-sm table-striped">
        <thead>
            <tr class="bg-primary">
                <th >Class Id</th>
                <th >Class Name</th>
                <th >No of Sections</th>
                <th >No of Students</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($class as $class)
                <tr>
                    <td><a href="{{route('class.show',$class->id)}}"> {{$class->id}}</a></td>
             <td><a href="{{route('class.show',$class->id)}}"> {{$class->name}}</a></td>
             <td>{{$class->section->count()}}</td>
             <td>{{$class->students->count() }}</td>
                </tr>
                @endforeach



        </tbody>
    </table>




</body>
</html>


@endsection
