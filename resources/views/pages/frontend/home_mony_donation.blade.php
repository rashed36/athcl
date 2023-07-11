@extends('welcome')
@section('title')
{{'@All Member'}}
@endsection
@section('content')
  <!-- Start Blog Area -->
  <div class="blog-area" style="margin-top: 30px">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">


       <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>JUMAA FUND</h2>
            </div>

            <div style="background: black; color: white; width: 100%; font-size: 30px;font-weight: bold; padding: 15px; margin-top: 30px; margin-bottom: 30px; line-height: 40px" >{{$totle_cash->type}} : {{$totle_cash->Totle_Cash}} &nbsp TK</div>
            <p>{{$totle_cash->content}}</p>
@foreach($home_donation as $rowhome_donation)
            <div>
              <div style="background: black; color: white; width: 100%; font-size: 30px;font-weight: bold; padding: 15px; margin-top: 30px; margin-bottom: 30px; line-height: 40px" >{{$rowhome_donation->account_name}} :  {{$rowhome_donation->number}}</div>
              <p>{{$rowhome_donation->Description}}</p>
            <br>
          </div>
 @endforeach





          </div>
        </div>
      </div>
     </div>
   </div>

@endsection