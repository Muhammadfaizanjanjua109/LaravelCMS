@extends('layouts.navbar')


@section('content')
    <style>
table, th, td ,tr {
  border: 1px solid black;
}

    </style>
</head>
<body>

    <button class="btn btn-success align-items-center" href=""><a style="  text-decoration: none;color: inherit;" href="{{Route('Section.store')}}"> Create a New section</a></button>
    <br>
    <br>



    <table style="width:100%" class="table table-bordered table-hover table table-sm table-striped">
        <thead>
            <tr>
                <th class="bg-primary">Class </th>
                <th class="bg-danger ">Section Name</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($section as $section)
                <tr>
                    <td>{{$section->clasec->name}}</td>
                <td> {{$section->section_name}}</td>


                </tr>
                @endforeach



        </tbody>
    </table>




</body>
</html>

@endsection
