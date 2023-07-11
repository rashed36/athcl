@extends('layouts.master')
@section('all News')
{{'@HOME'}}
@endsection

@section('content')


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Middle Photo</li>
        </ol>
      <!-- /.container-fluid -->
    <div class="col-sm-10">
      <div>
        <a href="#"> <img width="50%" src="{{URL::to($middle_photo->photo)}}" alt=""></a>
      </div>
      <br>
      <div><a href="{{ URL::to('eddit_middle_photo/'.$middle_photo->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a></div>
    </div>
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website <a href="http://techno-71.com" target="_blank">techno-71.com</a></span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->




















@endsection
