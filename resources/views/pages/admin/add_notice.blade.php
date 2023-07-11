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
          <li class="breadcrumb-item active">Add Notice</li>
        </ol>

         <div>
           <a href="{{route('notice')}}"><h3 class="btn btn-primary">Notice</h3></a>
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
      <!-- /.container-fluid -->
      <div class="row" style="margin-left: 50px; margin-top: 20px">
        <div class="" style="width: 400px">
          <form action="{{route('insurt_notice')}}" method="POST" enctype="multipart/form-data">
           @csrf
                 <div class="form-group">
                  <label for="facebook">Name</label>
                  <textarea  name="text" required="text" placeholder="Description" id="facebook" class="form-control"></textarea>
                </div>

               <div class="form-group">
              <label for="pcontact">Upload Pdf File</label>
                <input type="file" name="file" placeholder="File" id="pcontact" class="form-control"  />
                </div>
               <div class="form-group">
                <input type="submit" name="update-news" required="update-news" value="Add Result" class="btn btn-primary pull-right" >
                
               </div>
           </form>
        </div>
      </div> 

    </div>
    <!-- /.content-wrapper -->
    @endsection




















