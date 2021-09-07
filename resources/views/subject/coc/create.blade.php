@extends('layouts.navbar')


@section('content')

<form class="well form-horizontal" method="post" action="{{route('coc.store')}}">
    {{ csrf_field() }}
      <fieldset>
         <div class="form-group">
            <label class="col-md-4 control-label">Enter Topic Name</label>
            <div class="col-md-8 inputGroupContainer">
               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="topic" name="topic" placeholder="Enter Name Of topic" class="form-control" required="true"  type="text"></div>
            </div>
         </div>



         <div class="form-group">
            <label class="col-md-4 control-label">Enter Topic Name</label>
            <div class="col-md-8 inputGroupContainer">
               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                <textarea id="description" name="description" placeholder="description" class="form-control" required="true"  type="text" rows="7"></textarea>
                </div>
            </div>
         </div>
         <label hidden for="Input">Entering for subject</label>
      <input type="text" hidden name="subject_id" id="Subject_id" value="{{$id}}">
         <button class="btn-success content-center align-items-center" type="submit">Sumbit</button>



            </div>







         </div>

      </fieldset>

   </form>
@endsection
