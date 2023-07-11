@extends('welcome')
@section('title')
{{'@All notice'}}
@endsection
@section('content')


 <div class="about-area area-padding" style="margin-top: 30px" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>{{$blog_description->curs_name_b}}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img style="width:100%; height: 400px" src="{{URL::to($blog_description->photo)}}" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <div style="padding-left: 10px;" class="blog-meta">
                <span class="date-type">
                    <i class="fa fa-calendar"></i><b>{{$blog_description->cours_duration}}</b></span>
              </div>
                <h4 class="sec-head">{{$blog_description->curs_name}}</h4>
              <p style="text-align: justify;">{{$blog_description->curs_name_b}}</p>
              <p style="text-align: justify;">{{$blog_description->description}}</p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
@endsection