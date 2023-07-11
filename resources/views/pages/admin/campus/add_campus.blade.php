@extends('layouts.master')
@section('Add Campus')
{{'@AddCampus'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add New Campus</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('allcampus')}}"><h4>All Campus</h4></a>
        </div>
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="" style="width: 400px">
            <form action="{{route('insert_campus')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="location" id="location" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="short_description">Name</label>
                  <input type="text" name="name" id="name" placeholder="Enter Campus Namne" class="form-control">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" placeholder="Enter Campus Address" class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile No</label>
                  <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="long_description">Long Description</label>
                    <textarea name="long_description"  required="long_description" placeholder="long_description" id="long_description" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="map_link">Map Link</label>
                    <textarea name="map_link"  required="map_link" placeholder="https://google-map-generator.com/" id="map_link" class="form-control"></textarea>
                  </div>
                 <div class="form-group">
                  <input type="submit" name="add-campus" value="Add Campus" class="btn btn-primary pull-right" >
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
