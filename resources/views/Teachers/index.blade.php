@extends('layouts.navbar')


@section('content')

    <style>
table, th, td ,tr {
  border: 1px solid black;
}

    </style>
</head>
<body>



    <button class="btn btn-success align-items-center" href=""><a style="  text-decoration: none;color: inherit;" href="{{Route('teacher.Store')}}"> Create a New Teacher</a></button>
<br>
<br>
    <table style="width:100%" class=" table table-bordered table-hover table table-sm table-striped">
        <thead>
            <tr class="bg-primary">
                <th >Name of Teacher</th>
                <th >Teacher Pay</th>
                <th >Teacher Scale</th>
                <th >Subjects teaching</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($teachers as $teachers)

            {{-- {{dd($teachers)}} --}}
            <td>{{$teachers->name}}</td>
            <td>{{$teachers->pay}}</td>
            <td>{{$teachers->scale}}</td>
            <td>{{$teachers->subject->count() ?? ''}}</td>




        </tr>
            @endforeach


        </tbody>
    </table>




</body>
</html>


@endsection
