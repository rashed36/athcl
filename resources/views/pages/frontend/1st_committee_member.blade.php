@extends('welcome')
@section('title')
{{'@All Doctors'}}
@endsection
@section('content')
 
   <!-- Start team Area -->
  <div class="our-team-area area-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 60px">
          <div class="section-headline text-center">
            <h2>আমাদের দক্ষ চিকিৎসকগণ</h2>
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="team-top">
          
          <!-- End column -->



          @foreach($home_team as $rowhome_team)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div style="padding: 0px;" class="single-team-member">
              <div class="team-img">
                <a href="{{ URL::to('team_description/'.$rowhome_team->id) }}">
                    <img style="width: 100%;" src="{{URL::to($rowhome_team->photo)}}" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="{{$rowhome_team->facebook}}">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="{{$rowhome_team->twitter}}">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="{{$rowhome_team->instragrm}}">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>{{$rowhome_team->name}}</h4>
                <h6 >{{$rowhome_team->position}}</h6>
                <p>{{$rowhome_team->phone}}</p>
                <p>       
                               <?php 
                                $text=$rowhome_team->description;
                                    if (strlen($text)>60) {
                                    $text=substr($text, 0,60);
                                    echo $text.'. . .';
                                         }else{
                                            echo $text;
                                         }
                                 ?>
                                   
                  </p>
                <a href="{{ URL::to('team_description/'.$rowhome_team->id) }}"><p  style="color: blue">read more</p> </a>
                      
              </div>
            </div>
          </div>
@endforeach





          <!-- End column -->
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

@endsection