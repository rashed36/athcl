@extends('welcome')
@section('title')
{{'@HOME'}}
@endsection
@section('content')

   <!-- Start contact Area -->
  <div class="contact-area" style="margin-top: 35px" >
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>যোগাযোগ করুন</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i style="color: rgb(26, 26, 26);" class="fa fa-mobile"></i>
                <p>
                  Call: {{$contact_us_home->call}}<br>
                  <span> duration: {{$contact_us_home->duration}}</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i style="color: rgb(26, 26, 26);" class="fa fa-envelope-o"></i>
                <p>
                  Email: {{$contact_us_home->email}} <br>
                  <span>Web: {{$contact_us_home->web}}</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i style="color: rgb(26, 26, 26);" class="fa fa-map-marker"></i>
                <p>
                  Location: {{$contact_us_home->location}} <br>
                  <span>{{$contact_us_home->location_boot}}</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-12 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://maps.google.com/maps?q=%E0%A6%85%E0%A6%AE%E0%A7%83%E0%A6%A4%20%E0%A6%B2%E0%A6%BE%E0%A6%B2%20%E0%A6%A6%E0%A7%87%20%E0%A6%95%E0%A6%B2%E0%A7%87%E0%A6%9C%20%E0%A6%B8%E0%A6%82%E0%A6%B2%E0%A6%97%E0%A7%8D%E0%A6%A8,%20%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A7%81%E0%A6%95%E0%A6%A6%E0%A6%BE%E0%A6%B0%20%E0%A6%AE%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A6%B6%E0%A6%A8(%E0%A7%A9%E0%A7%9F%20%E0%A6%A4%E0%A6%B2%E0%A6%BE),%20%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE%E0%A6%B2%20%E0%A6%B0%E0%A7%8B%E0%A6%A1,%20%E0%A6%AC%E0%A6%B0%E0%A6%BF%E0%A6%B6%E0%A6%BE%E0%A6%B2%E0%A5%A4&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            <!-- End Map -->
          </div>

          <!-- End Google Map -->

        
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->
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
                      <li>ধুমপানমুক্ত নিরিবিলি পরিবেশ</li><br>
                      <li>সেমিষ্টার সিস্টেম পরীক্ষা পদ্ধতি</li><br>
                      <li>মেধানুযায়ী সার্টিফিকেট প্রদান</li><br>
                      <li>বিষয়ভিত্তিক বই/নোট প্রদান </li>
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
                    অমৃত লাল দে কলেজ সংলগ্ন, তালুকদার ম্যানশন(৩য় তলা), হাসপাতাল রোড, বরিশাল।
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