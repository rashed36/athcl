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
@foreach($gallery as $rowgallery)
          <!-- single-awesome-project start -->
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img style="width: 100%;" src="{{URL::to($rowgallery->photo)}}" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{URL::to($rowgallery->photo)}}">
                     
                      <span>See Full Screen Photos</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
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