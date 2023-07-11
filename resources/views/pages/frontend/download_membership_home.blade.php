@extends('welcome')
@section('title')
{{'@All notice'}}
@endsection
@section('content')
<div class="container" style="margin-top: 100px" >
  <h1>{{$download_membership_home->title}}</h1>
  <p>{{$download_membership_home->Description}}</p>
  <a href="{{URL::to($download_membership_home->file)}}"><img src="{{asset('public/mastaring/backend')}}/images/file/images.jfif"> </a>
</div>
@endsection