@extends('layouts.navbar')


@section('content')

</head>
<body>



    <button class="btn btn-success align-items-center" href=""><a style="  text-decoration: none;color: inherit;" href="{{Route('Student.store')}}">Admit New Student</a></button>
    <br>
    <br>

    <table style="width: 100%" class="table table-bordered table-hover table table-sm table-striped">
        <thead>
            <tr  class="primary">
                <th  class="bg-primary" >Name</th>
                <th>Father Name</th>
                <th  class="bg-primary">Address</th>
                <th>CNIC</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $student)
                <tr>
                <td> {{$student->name}}</td>
                <td>{{$student->father_name}}</td>
                <td>{{$student->Adress}}</td>
                <td>{{$student->CNIC}}</td>
                </tr>
                @endforeach



        </tbody>
    </table>




</body>
</html>

@endsection
