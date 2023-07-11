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
              <h2>পরীক্ষার ফলাফল</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->


@foreach($allnotice as $rowallnotice)

          <div class="col-md-12 col-sm-12 col-xs-12 design development">
                      {{-- <h4 style="color:green; font-weight:bold;" >{{$rowallnotice->text}}</h4> --}}
                      <h3><a href="{{$rowallnotice->file}}">{{$rowallnotice->text}}{{$rowallnotice->created_at}}</a></h3>
          </div>
@endforeach
      </div>
    </div>
  </div>
</div>
  <br><br><br>



 


@endsection