<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
<title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

<link href="{{asset('public/mastaring/frontend')}}/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="{{asset('public/mastaring/frontend')}}/css/bootstrap.min.css" rel="stylesheet">
  

  <!-- Favicons -->
  <link href="{{asset('public/mastaring/frontend')}}/img/favicon.ico" rel="icon">
  {{-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('public/mastaring/frontend')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('public/mastaring/frontend')}}/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="{{asset('public/mastaring/frontend')}}/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="{{asset('public/mastaring/frontend')}}/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="{{asset('public/mastaring/frontend')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('public/mastaring/frontend')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{asset('public/mastaring/frontend')}}/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{asset('public/mastaring/frontend')}}/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('public/mastaring/frontend')}}/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{asset('public/mastaring/frontend')}}/css/responsive.css" rel="stylesheet">

  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown:hover .dropdown-content {display: block;}
    /* Style all font awesome icons */
    .custom {
  padding-top: 10px; 
  padding-bottom: 10px; 
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 5px;
}

.custom:hover {
    opacity: 0.7;
}

.faf {
  background: #3B5998;
  color: white;
}

.fat {
  background: #55ACEE;
  color: white;
}

.fal {
  background: #007bb5;
  color: white;
}

.fas {
  background: #00aff0;
  color: white;
}
.baground{
  /* background-image: url('{{asset('public/mastaring/frontend')}}/img/baground.jpg');
  background-repeat: repeat-y; */
  /* background: #ffffc3; */
}

@media only screen and (min-width:1350px) and (max-width:1920px) {
    .img_width{ height: 400px } ;
         } 
@media only screen and (min-width:992px) and (max-width:1349px) {
    .img_width{ height: 350px } ;
         }  
@media only screen and (min-width:768px) and (max-width:991px) {
    .img_width{ height: 300px } ;
         }  
@media only screen and (min-width:480px) and (max-width:767px) {
    .img_width{ height: 250px } ;
         }  
@media only screen and (min-width:33px) and (max-width:479px) {
    .img_width{ height: 180px } ;
         }  

/* Main Regastiation Form */
body
{
  background-color:#f5f5f5;
}
.imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}

  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example" class="baground">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->


              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

             
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="{{route('frontendhome')}}">
                  <img style="width: 60px; border-radius: 100%" src="{{asset('public/mastaring/frontend')}}/img/Logo-3.png">
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                 
                <ul class="nav navbar-nav navbar-right" style="margin-top:   15px" >
                    <a class="page-scroll" style="color: white; font-size: 10px;  " href="">আত-তাকওয়া হেলথ কেয়ার লিমিটেড <br>নিবন্ধন নং- 62/21 গভঃ রেজিঃ নং- C-175166/21</a>
                  </li>
                                </a>

              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">

                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="page-scroll" href="{{route('frontendhome')}}">হোম</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('home_all_news')}}">কোর্স সমূহ</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('directors')}}">প্রশাসন</a>
                  </li>

                  <li class="dropdown dropbtn"><a class="dropdown-toggle" data-toggle="dropdown" href="#">শিক্ষা কার্যক্রম<span class="caret"></span></a>
                    <ul  class="dropdown-menu dropdown-content">
                      <li><a class="page-scroll" style="padding: 8px;" href="{{route('all_notic')}}">ফলাফল</a></li>
                      <li><a class="page-scroll" style="padding: 8px;" href="{{route('qualifation')}}">আবেদনকারীর যোগ্যতা</a></li>
                      <li><a class="page-scroll" style="padding: 8px;" href="{{route('admation')}}">ভর্তির নিয়মাবলী</a></li>
                      <li><a class="page-scroll" style="padding: 8px;" href="{{route('coursefee')}}">কোর্স ফি</a></li>
                      <li><a class="page-scroll" style="padding: 8px;" target="blank" href="{{route('registation')}}">অনলাইন রেজিস্টেশন</a></li>
                      <li><a class="page-scroll" style="padding: 8px;" target="blank" href="{{asset('public/mastaring/frontend')}}/file/At-Taqwa-Reg-From.pdf">আবেদন ফরম</a></li>
                    </ul>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('campus')}}">ক্যাম্পাস</a>
                  </li>

                    {{-- <li>
                      <a class="page-scroll" href="{{route('notice_board')}}">নোটিশ</a>
                    </li> --}}

                  <li>
                    <a class="page-scroll" href="{{route('ast_committee_member')}}">চিকিৎসকগণ</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('home_gallery')}}">গ্যালারী</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('contactus_home')}}">যোগাযোগ</a>
                  </li>

                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
@yield('content')

    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p style="color: #fff;">
                &copy; Copyright <strong>At-Taqwa health care Ltd</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="http://techno-71.com/">techno-71</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Libraries -->
  <script src="{{asset('public/mastaring/frontend')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/venobox/venobox.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/knob/jquery.knob.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/wow/wow.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/parallax/parallax.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/easing/easing.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/appear/jquery.appear.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('public/mastaring/frontend')}}/contactform/contactform.js"></script>

  <script src="{{asset('public/mastaring/frontend')}}/js/main.js"></script>
  <!-- data table -->
  <script src="{{asset('public/mastaring/frontend')}}/js/main.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/js/jquery.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/js/jquery-3.3.1.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('public/mastaring/frontend')}}/js/dataTables.bootstrap.min.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<!-- Handele ber js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script type="text/javascript">
  $("#btnPrint").live("click", function () {
      var divContents = $("#dvContainer").html();
      var printWindow = window.open('', '', 'height=400,width=800');
      printWindow.document.write('<html><head><title>DIV Contents</title>');
      printWindow.document.write('</head><body >');
      printWindow.document.write(divContents);
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      printWindow.print();
  });
</script>

<script>
  var button = document.getElementById("button");
  var makepdf = document.getElementById("makepdf");

  button.addEventListener("click", function () {
      html2pdf().from(makepdf).save();
  });
</script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
      });
    });
  </script>

  
</body>

</html>
