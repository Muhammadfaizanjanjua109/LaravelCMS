@extends('layouts.navbar')


@section('content')




{{-- @foreach ($class as $class)


<h1>{{$class->name}}</h1>



@foreach($class->section as $section)



<h3 style="color: red"><a href="">{{$section->section_name }}</a></h3>



@endforeach
@endforeach --}}





<table style="width:100%" class=" table table-bordered table-hover table table-sm table-striped">
    <thead>
        <tr class="bg-primary">
            <th >Section Name</th>
            <th >Section ID</th>
        </tr>
    </thead>
    <tbody>



        <h1>{{$class->name}}</h1>
             {{-- @foreach($class->section as $section) --}}


                {{-- @endforeach --}}

                @forelse ($class->section as $section)
                <tr>
                    <td>
                           {{-- <h3><a href="{{route('Section.show'),section->id }}"> {{section->$id}}  </a></h3> --}}
<a href="{{route('Section.show',$section->id)}}">{{$section->section_name}}</a>
                   </td>




                   <td>
                       {{-- <h3><a href="{{route('Section.show',$section->id )}}">{{$section->section_name }}</a></h3> --}}

               </td>
           </tr>
                @empty
                    <h3>Empty hai chahca</h3>
                @endforelse















@endsection
