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
          <li class="breadcrumb-item active">Update Membership File</li>
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

              <form action="{{ url('/Update_download_membership/'.$edit_download->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                   <div class="form-group">
                  <label for="Title">Title</label>
                    <input type="text" name="title" placeholder="Title" id="Title" class="form-control" value="{{$edit_download->title}}" />
                    </div><br>


                  <textarea name="Description" style="height: 150px " placeholder="Description" id="Description" class="form-control">{{$edit_download->Description}}</textarea><br>

                   <div class="form-group">
                     <input type="hidden" name="oldphoto" id="pcontact" value="{{$edit_download->file}}" />
                     <label for="Photo">Photo (Size: 850*530)</label>
                    <input type="file" name="file" placeholder="Photo" id="Photo" class="form-control"/>
                    </div>
                   <div class="form-group">
                    <input type="submit" name="download_membership" value="Download Membership" class="btn btn-primary pull-right" >
                    
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




















