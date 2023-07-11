@extends('welcome')
@section('title')
{{'@All notice'}}
@endsection
@section('content')


 <!-- Start Blog Area -->
  <div class="blog-area" style="margin-top: 30px; margin-bottom: 50px">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>NOTICE</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->


@foreach($all_notice as $rowallnotice)

          <div class="col-md-4 col-sm-4 col-xs-12 design development">
                      <h4 style="color:green; font-weight:bold;" >{{$rowallnotice->text}}</h4>
                      <span></i>{{$rowallnotice->created_at}}</span>
              <div class="awesome-img">
                <a href="#"> <img src="{{URL::to($rowallnotice->photo)}}" alt=""></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="{{URL::to($rowallnotice->photo)}}">
 
                    </a>
                  </div>
                </div>
              </div>
          </div>
@endforeach
      </div>
    </div>
  </div>
</div>
  



 


@endsection