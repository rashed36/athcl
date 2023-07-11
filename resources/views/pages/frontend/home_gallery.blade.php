@extends('welcome')
@section('title')
{{'@All notice'}}
@endsection
@section('content')
  <!-- Start portfolio Area -->
  <div id="portfolio" class="portfolio-area area-padding fix" style="margin-top: 30px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Photos</h2>
          </div>
        </div>
      </div>
     
      <div class="row">
          <!-- single-awesome-project start -->
        <div class="awesome-project-content">
@foreach($gallery_name as $rowgallery_name)
          <!-- single-awesome-project start -->
          <div  style="background: black; padding: 20px; margin-bottom: 20px" class="col-md-4 col-sm-4 col-xs-12 design development">
            <a href="{{ URL::to('view_all_photo/'.$rowgallery_name->id) }}"><div class="single-awesome-project">
               <h4 style="color: white" >{{$rowgallery_name->gallery_name}}</h4>
              <div class="awesome-img">
                <img style="width: 100%" src="{{URL::to($rowgallery_name->photo)}}" alt="" />
              </div>
            </div><h4 style="color: white" >See All Photo</h4></a>
          </div>
          <!-- single-awesome-project end -->
@endforeach
  <!-- single-awesome-project end -->
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-portfolio end -->

@endsection