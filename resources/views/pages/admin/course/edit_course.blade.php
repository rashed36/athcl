@extends('layouts.master')
@section('Edit Course')
{{'@EditCourse'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Edit Course</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('course')}}"><h4>All Course</h4></a>
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
            <form action="{{url('update_course/'.$Editcourse->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="curs_name">Course Name</label>
                    <input type="text" name="curs_name" value="{{$Editcourse->curs_name}}" required="curs_name" placeholder="curs_name" id="curs_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="curs_name_b">Course Name (Bangla)</label>
                    <input type="text" name="curs_name_b" value="{{$Editcourse->curs_name_b}}" required="curs_name_b" placeholder="curs_name_b" id="curs_name_b" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="cours_duration">Course Duriation</label>
                    <input type="text" name="cours_duration" value="{{$Editcourse->cours_duration}}" required="cours_duration" placeholder="cours_duration" id="cours_duration" class="form-control" />
                </div>
                 <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description"  required="description" placeholder="Description" id="description" class="form-control">{{$Editcourse->description}}</textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="oldphoto" id="pcontact" value="{{$Editcourse->photo}}" />
                    <label for="pcontact">Photo(size= 850*530)</label>
                    <input type="file" name="photo" placeholder="Photo" id="pcontact" class="form-control"  />
                    <img style="width: 100px" src="{{ URL::to($Editcourse->photo)}}">
                </div>
                 <div class="form-group">
                  <input type="submit" name="update-course" value="Update Course" class="btn btn-primary pull-right" >
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
