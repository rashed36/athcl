@extends('welcome')
@section('title')
{{'@All Derictors'}}
@endsection
@section('content')
 
   <!-- Start team Area -->
  <div class="our-team-area area-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 60px">
          <div class="section-headline text-center">
            <h2>{{$single_campus->location}} ক্যাম্পাস</h2>
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="team-top">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <iframe src="{{$single_campus->map_link}}" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>  
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">
                        <h4>{{$single_campus->name}}</h4>
                        <h5><b>{{$single_campus->mobile}}</b> </h5>
                        <p><b></b>{{$single_campus->address}}</p>
                      <p style="text-align: justify;">{{$single_campus->long_description}} </p>       
                    </div>
                  </div>
                </div>
            </div>  
          </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

@endsection