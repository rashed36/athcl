@extends('layouts.master')
@section('title')
{{'@Add Notice'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Blood Donation</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('blood_donation')}}"><h4>All Blood Donation</h4></a>
        </div><br>
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          <div class="" style="width: 400px">
            <form action="{{route('inpute_add_donation')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="Name">Name</label>
                  <input type="text" name="Name" required="Name" placeholder="Name" id="Name" class="form-control" />
              </div>

                 <div class="form-group">
                <label for="Batch">Batch</label>
                  <input type="text" name="Batch" required="Batch" placeholder="Batch" id="Batch" class="form-control" />
                  </div>

                 <div class="form-group">
                  <label for="Group">Blood Group</label>
                  <input type="text" name="Group" required="Group" placeholder="Blood Group" id="Group" class="form-control" />
                </div>

                 <div class="form-group">
                  <label for="Phone">Phone</label>
                  <input type="text" name="Phone" required="Phone" placeholder="Phone" id="Phone" class="form-control" />
                </div>

                 <div class="form-group">
                  <input type="submit" name="blood_donation" value="Add Blood Donation" class="btn btn-primary pull-right" >
                  
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




















