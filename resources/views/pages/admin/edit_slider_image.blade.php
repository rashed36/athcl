@extends('layouts.master')
@section('all News')
{{'@HOME'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          {{-- <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li> --}}
          <li class="breadcrumb-item">
            <a href="{{route('all_lider_image')}}">All Slider Image </a>
          </li>
          <li class="breadcrumb-item active">Update Slider</li>
        </ol>
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
            <form action="{{ url('/update_slider_image/'.$edit_slider_image->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                  <label for="twitter">First Content</label>
                  <textarea name="f_content"  required="f_content" placeholder="Description" id="twitter" class="form-control">{{$edit_slider_image->f_content}}</textarea>
                </div>

                 <div class="form-group">
                  <label for="twitter">Second Content</label>
                  <textarea name="s_content"  required="s_content" placeholder="Description" id="twitter" class="form-control">{{$edit_slider_image->s_content}}</textarea>
                </div>

                 <div class="form-group">
                <label for="pcontact">Photo(size= 850*530)</label>
                 <input type="hidden" name="oldphoto" id="pcontact" value="{{$edit_slider_image->slider_image}}" />
                  <input type="file" name="photo_slider_image" placeholder="Photo" id="pcontact" class="form-control"  /><br>
                  <div >
                    <img  style="width: 110px" src="{{URL::to($edit_slider_image->slider_image)}}">
                  </div>
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-news" value="Update slider" class="btn btn-primary pull-right" >
                  
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
