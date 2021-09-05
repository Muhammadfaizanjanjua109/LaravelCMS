<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="bg-grey">

        <h1 class="h1">Enter New Class</h1>
    </div>
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" method="post" action="{{route('teacher.create')}}">
                    {{ csrf_field() }}
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Enter teacher Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="name" name="name" placeholder="Class Name" class="form-control" required="true"  type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Enter Sclae </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><select name="scale" id="scale">
                                <option value="Jnr">Jonior</option>
                                <option value="Senior">Senior</option>


                              </select></div>
                            </div>








                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Enter Pay for teacher</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="pay" name="pay" placeholder="Enter Pay in  numbers" class="form-control" required="true"  type="text"></div>
                            </div>
                         </div>

                              </div>
                            </div>










                         </div>
                      </fieldset>
                      <button class="btn-success content-center align-items-center" type="submit">Sumbit</button>
                   </form>
                </td>

             </tr>
          </tbody>
       </table>
    </div>
