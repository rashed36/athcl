@extends('layouts.master')
@section('all News')
{{'@HOME'}}
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
    <form action="{{ url('/update_middle_photo/'.$eddit_middle_photo->id) }}" method="POST" enctype="multipart/form-data">  
           @csrf
         <div class="form-group">

          <input type="hidden" name="oldphoto" id="pcontact" value="{{$eddit_middle_photo->photo}}"/>
          <input type="file" name="photo" required="photo" placeholder="Photo Name" id="twitter" class="form-control"  />
        </div>

 
         <div class="form-group">
          <input type="submit" name="update-student" value="uodate photo" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 




















@endsection
