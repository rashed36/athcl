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
          <li class="breadcrumb-item active">1st Committee Member</li>
        </ol>

        <!-- DataTables Example -->
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          <div class="" style="width: 400px">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form action="{{ url('/update_jumaa_member/'.$edit_jumaa_member->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
              <div class="form-group">
                <label for="name">Name</label>
                  <input type="text" name="name" required="name" placeholder="Name" id="name" class="form-control" value="{{$edit_jumaa_member->name}}" />
              </div>

                 <div class="form-group">
                <label for="Batch">Batch</label>
                  <input type="text" name="Batch" required="Batch" placeholder="Batch" id="Batch" class="form-control" " value="{{$edit_jumaa_member->Batch}}" />
                  </div>

                 <div class="form-group">
                <label for="type_of_member">Type of member</label>
                  <input type="text" name="type_of_member" required="type_of_member" placeholder="type_of_member" id="type_of_member" class="form-control" " value="{{$edit_jumaa_member->type_of_member}}" />
                  </div>

                 <div class="form-group">
                <label for="position_name">Position Name</label>
                  <input type="text" name="position_name" required="position_name" placeholder="position_name" id="type_of_member" class="form-control" " value="{{$edit_jumaa_member->position_name}}" />
                  </div>

                 <div class="form-group">
                <label for="Year_of_joining">Year of joining</label>
                  <input type="text" name="Year_of_joining" required="Year_of_joining" placeholder="Year_of_joining" id="Year_of_joining" class="form-control" value="{{$edit_jumaa_member->Year_of_joining}}" />
                  </div>

                 <div class="form-group">
                  <label for="phone">phone</label>
                  <input type="text" name="phone" required="phone" placeholder="phone" id="phone" class="form-control" value="{{$edit_jumaa_member->phone}}" />
                </div>

                 <div class="form-group">
                <label for="photo">Photo</label>
                 <input type="hidden" name="oldphoto" id="pcontact" value="{{$edit_jumaa_member->photo}}" />
                  <input type="file" name="photo" placeholder="Photo" id="photo" class="form-control"  value="{{URL::to($edit_jumaa_member->photo)}}" />
                  <img style="width: 100px" src="{{ URL::to($edit_jumaa_member->photo)}}">
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-student" value="update member" class="btn btn-primary pull-right" >
                  
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




















