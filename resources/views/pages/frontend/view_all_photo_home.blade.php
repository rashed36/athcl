@extends('welcome')
@section('title')
{{'@HOME'}}
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
              <h2>আমাদের সকল কোর্স সমূহ</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->








          @foreach($all_blog_news as $row)
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
                          <p style="text-align: justify;" >{{$row->curs_name_b}}</i></p>
                         
                        </div>
                        <span>
                                  
                          </span>
                      </div>
                    </div>
          </a>
                    <!-- End Left Blog-->
          @endforeach









          
       </div>
    </div>
  </div>
 </div>
          <!-- End Left Blog-->















  @endsection