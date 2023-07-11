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
          <li class="breadcrumb-item active">Account</li>
        </ol>

        <!-- DataTables Example -->
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          <div class="" style="width: 80%">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form action="{{ url('/update_donation_account/'.$edit_donation_account->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
              <div class="form-group">
                <label for="name">type</label>
                  <input type="text" name="type" required="type" placeholder="type" id="type" class="form-control" value="{{$edit_donation_account->type}}" />
              </div>

                 <div class="form-group">
                <label for="Totle_Cash">Totle_Cash</label>
                  <input type="text" name="Totle_Cash" required="Totle_Cash" placeholder="Totle_Cash" id="Totle_Cash" class="form-control" value="{{$edit_donation_account->Totle_Cash}}" />
                  </div>

                   <div class="form-group">
                      <textarea style="height: 200px" name="content" required="content" placeholder="content" id="content" class="form-control">{{$edit_donation_account->content}}</textarea>
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




















