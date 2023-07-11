@extends('layouts.master')
@section('title')
{{'@Notice'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Letest News</li>
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
            <form action="{{ url('/update_Planning/'.$edit_Planning->id) }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="Planning">Planning</label>
                  <input type="text" name="Planning" required="Planning" placeholder="Planning" id="Planning" class="form-control" value="{{$edit_Planning->Planning}}" />
              </div>

                 <div class="form-group">
                <label for="Starting">Starting</label>
                  <input type="text" name="Starting" required="Starting" placeholder="Facebook" id="Starting" class="form-control" " value="{{$edit_Planning->Starting}}" />
                  </div>

                 <div class="form-group">
                  <label for="Success">Success</label>
                  <input type="text" name="Success" required="Success" placeholder="Success" id="Success" class="form-control" value="{{$edit_Planning->Success}}" />
                </div>
                
                 <div class="form-group">
                  <input type="submit" name="update-student" value="update Planning" class="btn btn-primary pull-right" >
                  
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




















