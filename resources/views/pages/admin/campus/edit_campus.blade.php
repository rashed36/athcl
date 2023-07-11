@extends('layouts.master')
@section('Edit Campus')
{{'@EditCampus'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Campus</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('allcampus')}}"><h4>All Campus</h4></a>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          <div class="" style="width: 400px">
            <form action="{{url('update_campus/'.$Editcampus->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                      <label for="location">Location</label>
                      <input type="text" name="location" value="{{$Editcampus->location}}" placeholder="location" id="location" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label for="short_description">Name</label>
                    <input type="text" name="name" id="name" value="{{$Editcampus->name}}" placeholder="Enter Campus Namne" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" value="{{$Editcampus->address}}" id="address" placeholder="Enter Campus Address" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input type="text" name="mobile" value="{{$Editcampus->mobile}}" id="mobile" placeholder="Enter Mobile Number" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="long_description">Long Description</label>
                      <textarea name="long_description"  required="long_description" placeholder="long_description" id="long_description" class="form-control">{{$Editcampus->long_description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="map_link">Map Link</label>
                      <textarea name="map_link"  required="map_link" placeholder="map_link" id="map_link" class="form-control">{{$Editcampus->map_link}}</textarea>
                    </div>
                   <div class="form-group">
                    <input type="submit" name="Update-campus" value="Update Campus" class="btn btn-primary pull-right" >
                   </div>
               </form>
          </div>
        </div> 
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->









@endsection
