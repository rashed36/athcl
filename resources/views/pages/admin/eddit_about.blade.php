@extends('layouts.master')
@section('title')
{{'@Edit'}}
@endsection

@section('content')
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('about')}}">About</a>
          </li>
          <li class="breadcrumb-item active">Edit About</li>
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
          <form action="{{ url('/update_about/'.$abouteddit->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="Call">Name</label>
                <input type="text" name="name" required="name" placeholder="Name" id="Call" class="form-control" value="{{$abouteddit->name}}" />
            </div>

               <div class="form-group">
              <label for="facebook">Title</label>
                <input type="text" name="title" required="title" placeholder="Title" id="facebook" class="form-control" " value="{{$abouteddit->title}}" />
                </div>


                <div class="form-group">
                <label for="twitter">Description</label>
                  <textarea   name="description" required="description" placeholder="Description" id="twitter" class="form-control">{{$abouteddit->description}}</textarea>
                </div>



               <div class="form-group">
              <img style="width: 100px" src="{{ URL::to($abouteddit->photo)}}">
                <input type="hidden" name="oldphoto" id="pcontact" value="{{$abouteddit->photo}}" />
                <input type="file" name="photo" placeholder="Photo" id="pcontact" class="form-control"  />
                </div>
               <div class="form-group">
                <input type="submit" name="update-about" value="update About" class="btn btn-primary pull-right" >
                
               </div>
           </form>
        </div>
      </div> 

      </div>

    </div>
    <!-- /.content-wrapper -->
    @endsection




















