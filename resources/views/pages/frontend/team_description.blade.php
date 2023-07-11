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
            <h2>{{$team_description->name}}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img style="width:100%; height: 400px" src="{{URL::to($team_description->photo)}}" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
                <h6><b>{{$team_description->position}}</b></h6>
                <p><b>{{$team_description->phone}}</b></p>
                <p>{{$team_description->description}}</p>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
 </div>
@endsection