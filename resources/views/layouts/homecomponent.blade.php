@extends('layouts.navbar')


@section('content')


<style>
    #cards_landscape_wrap-2{
  text-align: center;
  background: #F7F7F7;
}
#cards_landscape_wrap-2 .container{
  padding-top: 80px;
  padding-bottom: 100px;
}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box{
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease;
  -moz-transition:all .9s ease;
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease;
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  margin-top: 50px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px;
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6{
  margin-top: 0px;
  margin-bottom: 4px;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: 'Roboto Black', sans-serif;
  letter-spacing: 1px;
  color: #00acc1;
}
</style>



<div id="cards_landscape_wrap-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('clas.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/classroom.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Classroom</h6>
                                <p>You can Check Classroom details from Here</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('Section.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/sace.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Sections </h6>
                                <p>You can check your Total Section in college from Here</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('student.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/sections.jpg" alt="" />
                            </div>

                            <div class="text-container">
                                <h6>Students</h6>
                               <p>Check Total Students Details in this section</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/students.png" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Teacher</h6>
                               <p>Check the role of teachers in this sections</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>





{{--
////////////////////Second Line   cards  --}}





<div id="cards_landscape_wrap-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('subject.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/subject.png" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Subjects</h6>
                                <p>You can Check Subjects details from Here</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('Section.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/sace.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Sections </h6>
                                <p>You can check your Total Section in college from Here</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="{{route('student.index')}}">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/sections.jpg" alt="" />
                            </div>

                            <div class="text-container">
                                <h6>Students</h6>
                               <p>Check Total Students Details in this section</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/images/students.png" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Teacher</h6>
                               <p>Check the role of teachers in this sections</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
