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
                <th >Subjects</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subject as $subject)
                <tr>
             <td><a href="{{route('subject.show',$subject->id)}}"> {{$subject->name}}</a></td>
                </tr>
                @endforeach



        </tbody>
    </table>




</body>
</html>


@endsection
