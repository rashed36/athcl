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
            <h2>আমাদের ক্যাম্পাস সমূহঃ</h2>
          </div>
        </div>
      </div>
      {{-- <div class="form-outline mb-4">
          <form action="">
            <input type="search" placeholder="জেলা অনুযায়ী ক্যাম্পাস অনুসন্ধান করুন।" class="form-control" id="datatable-search-input">
            <label class="form-label" for="datatable-search-input">Search</label>
            
          </form>
      </div> --}}
    @foreach($allcampus as $rowallnotice)
      <div class="row" >
        <div class="team-top">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a  style="text-decoration: none;" href="{{ URL::to('single_campus/'.$rowallnotice->id) }}">
                    <div style="padding: 0px;" class="single-team-member">
                        <div class="team-content">
                            <p style="font-size: 20px; padding-left: 10px;"><b>{{$rowallnotice->name}} </b><b>Address: </b>{{$rowallnotice->address}} <b>ফোনঃ</b> {{$rowallnotice->mobile}}</p>                 
                        </div>
                    </div>
                </a>
            </div>  
          </div>
      </div>
    @endforeach
    </div>
  </div>
  <!-- End Team Area -->

@endsection