{{-- @extends('layouts.master')
@section('title')
{{'@Add Notice'}}
@endsection

@section('content')
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
    <form action="{{ url('/update_notice/'.$editnotic->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
         <div class="form-group">
          <label for="twitter">Name</label>
          <input type="text" name="text" required="text" placeholder="Photo Name" id="twitter" class="form-control" value="{{$editnotic->text}}" />
        </div>  

         <div class="form-group">
          <label for="twitter">Upload Pdf File</label>
          <input type="hidden" name="oldphoto" id="pcontact" value="{{$editnotic->file}}" />
          <input type="file" name="file" placeholder="Photo Name" id="twitter" class="form-control" /><br>
          <label for="twitter">
             <img style="width:100px" src="{{ URL::to($editnotic->file)}}">
           </label>
        </div>

 
         <div class="form-group">
          <input type="submit" name="update-student" value="update notice" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 














    @endsection



















 --}}
