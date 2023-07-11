@extends('welcome')
@section('title')
{{'@HOME'}}
@endsection
@section('content')

<!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php $count_slider_image=1; ?>
          @foreach($slider_image as $row_slider_image)
                  <img src="{{URL::to($row_slider_image->slider_image)}}" alt="" title="#slider-direction-{{$count_slider_image++}}" />
          @endforeach
      </div>

      <!-- direction 1 -->

    <?php $count_slider_imagea=1; ?>
    @foreach($slider_image as $row_slider_image)
      <div id="slider-direction-{{$count_slider_imagea++}}" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                 <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">{{$row_slider_image->f_content}}</h1>
                </div>
               
                <!-- layer 2 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 style="font-size: 13px;" class="title1">{{$row_slider_image->s_content}}</h2>
                </div>
                <!-- layer 3 -->
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach



      <!-- direction 3 -->
    </div>
  </div>
  <!-- End Slider Area -->





  <!-- Start About area -->
  <div class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>আমাদের পরিচিতি</h2>
          
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img class="img_width" style="width:100%;" src="{{URL::to($about_details->photo)}}" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
                <h4>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার কর্তৃক অনুমোদিত</h4>
                <p>জনস্বাস্হ্য বিভাগ নিবন্ধন নং- 62/21 গভঃ রেজিঃ নং- C-175166/21</p>
                <h5><b>আত-তাকওয়া হেলথ কেয়ার এন্ড ট্রেইনিং সেন্টার</b> </h5>
                <p><b>প্রধান ক্যাম্পাস: </b> অমৃত লাল দে কলেজ সংলগ্ন, তালুকদার ম্যানশন(৩য় তলা), হাসপাতাল রোড, বরিশাল।</p>
                <p style="font-size: 16px;"><b>(জেলা ও উপজেলা ভিত্তিক শর্তসাপেক্ষে শাখা প্রদান করা  হবে।)</b></p>
                <h4 style="padding-top: 10px;"><b>আমাদের কিছু কথা</b></h4>
              <p style="text-align: justify;" >
                আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। 
                অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার।
                গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা 
                সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে 
                শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের 
              </p>       
                <a  style="font-weight: bold; color: blue; font-style: italic;"  href="{{route('about_details_page')}}">.....আরো পড়ুন</p></a>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->



  <!-- Start Blog Area -->
  <div class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>আমাদের কোর্স সমূহ</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
    @foreach($all_blog as $row)
    <a href="{{ URL::to('blog_description/'.$row->id) }}">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div style="padding: 0px;" class="single-team-member single-blog">
              <div class="single-blog-img">
                <a href="{{ URL::to('blog_description/'.$row->id) }}">
                    <img style="width: 100%;" src="{{URL::to($row->photo)}}" alt="">
                  </a>
              </div>
              <div style="padding-left: 10px;" class="blog-meta">
                <span class="date-type">
                    <i class="fa fa-calendar"></i><b>{{$row->cours_duration}}</b></span>
              </div>
              <div style="padding-left: 10px;" class="blog-text">
                <h4>
                    <a href="blog.html"></i>{{$row->curs_name}}</a>
                  </h4>
                <p style="text-align: justify;" >{{$row->curs_name_b}}</p>
               
              </div>
              <span>
                        
                </span>
            </div>
          </div>
</a>
          <!-- End Left Blog-->
@endforeach




<div class="team-content text-center">
    <a style="background: rgb(104, 102, 102);" href="{{ URL::to('home_all_news') }}" class="ready-btn">সব কোর্স দেখুন</a>

  </div>
    <!-- Faq area start -->
    {{-- <div class="faq-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            {{-- <div class="section-headline text-center">
              <h2>নোটিশ</h2>
            </div> --}}
            {{-- <img style="width: 100%;" src="{{asset('public/mastaring/frontend')}}/img/banner.jpeg" alt="banner image">

          </div>
        </div> --}}
        {{-- <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
          
          </div>
        </div> --}}
        <!-- end Row -->
      {{-- </div>
    </div> --}} 
    <!-- End Faq Area -->


   <!-- Start team Area -->
  <div class="our-team-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 60px">
          <div class="section-headline text-center">
            <h2>আমাদের দক্ষ পরিচালকগণ</h2>
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

<div class="team-content text-center">
  <a style="background: rgb(104, 102, 102);" href="{{ URL::to('directors') }}" class="ready-btn">সব দক্ষ পরিচালকগণ দেখুন</a>
</div>
          <!-- End column -->
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <div class="our-team-area">
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

@foreach($dr_team as $dr_team)
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div style="padding: 0px;" class="single-team-member">
              <div class="team-img">
                <a href="{{ URL::to('team_description/'.$dr_team->id) }}">
                    <img style="width: 100%;" src="{{URL::to($dr_team->photo)}}" alt="">
                  </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="{{$dr_team->facebook}}">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="{{$dr_team->twitter}}">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="{{$dr_team->instragrm}}">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>{{$dr_team->name}}</h4>
                <h6 >{{$dr_team->position}}</h6>
                <p>{{$dr_team->phone}}</p>
                <p>       
                               <?php 
                                $text=$dr_team->description;
                                    if (strlen($text)>60) {
                                    $text=substr($text, 0,60);
                                    echo $text.'. . .';
                                         }else{
                                            echo $text;
                                         }
                                 ?>
                                   
                  </p>
                <a href="{{ URL::to('team_description/'.$dr_team->id) }}"><p  style="color: blue">read more</p> </a>
                      
              </div>
            </div>
          </div>
@endforeach

<div class="team-content text-center">
  <a style="background: rgb(104, 102, 102);" href="{{ URL::to('ast_committee_member') }}" class="ready-btn">সব দক্ষ চিকিৎসকগণ দেখুন</a>
</div>
          <!-- End column -->
          
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

    <!-- Faq area start -->
    <br>
    <div class="faq-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>যোগাযোগ</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Faq Area -->

    <!-- Start reviews Area -->
  <div class="reviews-area hidden-xs">
    <div class="work-us">
      <div class="work-left-text">
        <a href="#">
            <img src="{{URL::to($middle_photo->photo)}}" alt="">
          </a>
      </div>
      <div class="work-right-text text-center">
        <h2>যেকোনো সাহায্যের জন্য</h2>
           
        <h5>আমাদের সাথে যোগাযোগ করুন।</h5>
        <a href="{{route('contactus_home')}}" class="ready-btn">যোগাযোগ</a>
      </div>
    </div>
  </div>
  <!-- End reviews Area -->
  
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
 <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 class="widgettitle"><img style="width: 50px; height: 50px; border-radius: 100%" src="{{asset('public/mastaring/frontend')}}/img/Logo-2.png" alt="CMRISBD.ORG"> <b>ATTAQUYA.BD.COM</b></h4>
                <div class="footer-contacts">
                  <div class="footer-head">
                    <h4><b>যে কোন তথ্যের জন্য যোগাযোগ করুন</b></h4>
                    <div class="">
                      <a href="#" class="custom faf fa fa-facebook"></a>
                      <a href="#" class="custom fat fa fa-twitter"></a>
                      <a href="#" class="custom fas fa fa-skype"></a>
                      <a href="#" class="custom fal fa fa-linkedin"></a>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->


          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4><b>একাডেমীর বৈশিষ্ট্য</b></h4>
                      <li>ধুমপানমুক্ত নিরিবিলি পরিবেশ </li><br>
                      <li>সেমিষ্টার সিস্টেম পরীক্ষা পদ্ধতি </li><br>
                      <li>মেধানুযায়ী সার্টিফিকেট প্রদান </li><br>
                      <li>বিষয়ভিত্তিক বই/নোট প্রদান </li><br>
                      <li>সিসি টিভি দ্বারা সম্পূর্ন ক্যাম্পাস  পর্যাবেক্ষন </li><br>
                      <li>ওয়েব সাইটে রেজাল্ট পাবলিস্ট </li><br>
                      <li>প্লাকটিক্যাল সহ হাতে কলমে প্রশিক্ষণ </li>
                {{-- <div class="footer-contacts">
                  <p><span>মোবাইলঃ {{$footer_information->Tel}}</span></p>
                  <p><span>ইমেইলঃ {{$footer_information->Email}}</span> </p>
                  <p><span>সময়ঃ {{$footer_information->Working_Hours}}</span></p>
                </div> --}}
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4><b>যোগাযোগ</b></h4>
                <div class="flicker-img">
                  <p>
                    {{$footer_information->address}}
                  </p>
                 <div class="footer-contacts">
                  <p><span style="color: #fff;">মোবাইলঃ {{$footer_information->Tel}}</span></p>
                  <p><span style="color: #fff;">ইমেইলঃ {{$footer_information->Email}}</span> </p>
                  <p><span style="color: #fff;">সময়ঃ {{$footer_information->Working_Hours}}</span></p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection