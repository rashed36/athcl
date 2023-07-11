@extends('welcome')
@section('title')
{{'@HOME'}}
@endsection
@section('content')

 <div class="about-area area-padding" style="margin-top: 30px" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>আমাদের কিছু কথা</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img class="img_width" style="width:100%;"  src="{{URL::to($about_details_page->photo)}}" alt="">
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
                <h5><b>আত-তাকওয়া হেলথ কেয়ার এন্ড ট্রেইনিং সেন্টার</b></h5>
                <p><b>প্রধান ক্যাম্পাস: </b> অমৃত লাল দে কলেজ সংলগ্ন, তালুকদার ম্যানশন(৩য় তলা), হাসপাতাল রোড, বরিশাল।</p>
                <p style="font-size: 16px;"><b>(জেলা ও উপজেলা ভিত্তিক শর্তসাপেক্ষে শাখা প্রদান করা  হবে।)</b></p>
                <h4 style="padding-top: 10px;"><b>আমাদের কিছু কথা</b></h4>
              <p style="text-align: justify;" >
                আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। 
                অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার।
                গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা 
                সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে 
                শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য
                পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার
                মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের
                হাত থেকে মুক্তি পাবে।
              </p>       
               
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>

      <div style="padding-top: 50px;" class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><b>কেনো এই কোর্স করবেন ?</b></h2>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="">
          <div style="color: rgb(26, 26, 26); font-size: 18px;" class="single-well">
            <li>১০০% কর্মসংস্থানের নিশ্চিয়তা ।</li><br>
            <li>ফার্মেসি প্রতিষ্ঠা ও পল্লী চিকিৎসায় স্বাবলম্বী হতে এবং ড্রাগ লাইসেন্স এর জন্য সহায়তা করা হয় ।</li><br>
            <li>সেবা মূলক ও সম্মানজনক পেশা ।</li><br>
            <li>সকল বেসরকারি / প্রাইভেট হাসপাতাল এবং এনজিওতে চাকরির সুযোগ ।</li><br>
            <li>দেশীব্যাপী প্রইভেট প্রকটিস করার সরকারী অনুমোদনপ্রাপ্তি।</li><br>
            <li>অভিজ্ঞ ডাক্তারগন দ্বারা সুন্দর ও মনোরম পরিবেশে ক্লাল্সের ব্যবস্থা ।</li><br>
            <li>সরকারী হাসপাতাল ও আমাদের সহযোগী ক্লিনিক সমূহে ইন্টার্নির সুযোগ ।</li><br>
            <li>ওয়েব সাইটের মাধ্যমে  ফলাফল প্রদান করা হয় ।</li><br>
            <li>কোর্স শেষে গণপ্রজাতন্ত্রী বাংলাদেশ সরকার কর্তৃক অনুমোদিত সার্টিফিকেট প্রদান ।</li><br>
            <br>
          </div>
        </div>
      </div>

      <div style="padding-top: 100px;" class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2><b>প্রাকটিক্যাল ক্লাসে যা শিখানো হয় !</b></h2>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="">
          <div style="color: rgb(26, 26, 26); font-size: 18px;" class="single-well">
            <li>রোগীর প্রাথমিক লক্ষণ সমূহ দেখে রোগ নির্বাচন করা ও প্রয়োজনীয় ঔষধ প্রদান করতে পারা ।</li><br>
            <li>জ্বর ও রক্ত চাপ মাপা ।</li><br>
            <li>কাটা জায়গা সেলাই, ড্রেসিং ও ব্যান্ডেজ করা ।</li><br>
            <li>স্যালাইন ও ইনজেকশন পুশিং এবং ডায়াবেটিস পরীক্ষা ।</li><br>
            <li>নেভুলাইজার/অক্সিজেন সিলিন্ডারের ব্যবহার ।</li><br>
            <li>রোগীর প্রেসক্রিপশন/রিপোর্ট  বোঝা এবং মেডিকেল যন্ত্রপাতির নাম ও ব্যবহার হাতে কলমে শিখানো হয় ।</li><br>
            <li>প্রাথমিক চিকিৎসা প্রদান করতে পারা ।</li><br>
          </div>
        </div>
      </div>

      {{-- <div style="padding-top: 50px;" class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="text-center">
            <h3><b>আমাদের সেবা সমূহঃ</b></h3>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="">
          <div class="single-well">
            <li>অভিজ্ঞ চিকিৎসক দ্বারা প্রশিক্ষণ প্রদান।</li><br>
            <li>রক্তচাপ মাপা মেডিকেল যন্ত্রপাতির নাম ও ব্যবহার শিখানো।</li><br>
            <li>কাটা জায়গা সেলাই, ড্রেসিং, ব্যান্ডেজ, বুক পরীক্ষা।</li><br>
            <li>ইনজেকশন, স্যালাইন, আই.ভি.ক্যানলা পুশিং, জ্বর মাপা, ইত্যাদি হাতে কলমে শেখানো হয়। রোগের রিপোর্ট বুঝা।</li><br>
            <li>কোর্স শেষে প্রত্যেক ছাত্র/ছাত্রীদের মেধা অনুযায়ী সনদপত্র প্রদান।</li><br>
            <li>হাসপাতাল/ক্লিনিকে প্র্যাকটিক্যাল ক্লাসের ব্যবস্থা (প্র্যাকটিক্যাল ফি প্রদান সাপেক্ষে)</li><br>
            <li>ধুমপান ও রাজনীতি মুক্ত নিরিবিলি পরিবেশে প্রশিক্ষনের ব্যবস্থা।</li><br>
            <li>দূরবর্তী ছাত্র/ছাত্রীদের জন্য দূরশিক্ষনের ব্যবস্থা।</li><br>
            <li>ছাত্র/ছাত্রীদের মেডিকেল যন্ত্রপাতি প্রদান (শর্ত প্রযোজ্য)</li><br>
            <li>এককালীন টাকা পরিশোধের ২০% ডিসকাউন্ট।</li><br>
            <li>চাকরিজীবিদের জন্য বিশেষ ব্যাচের ব্যবস্থা।</li><br>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  @endsection

  