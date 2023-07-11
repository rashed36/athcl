@extends('layouts.master')
@section('title')
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
    <form action="{{ url('/home_time_update/'.$update_home_team->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      <div class="form-group">
        <label for="name">Name</label>
          <input type="text" name="name" placeholder="Name" id="name" class="form-control" value="{{$update_home_team->name}}" />
      </div>

         <div class="form-group">
        <label for="facebook">Facebook</label>
          <input type="text" name="facebook" placeholder="Fb Profile Link" id="facebook" class="form-control" value="{{$update_home_team->facebook}}" />
          </div>

         <div class="form-group">
          <label for="twitter">Twitter</label>
          <input type="text" name="twitter" placeholder="Twitter Profile Link" id="twitter" class="form-control" value="{{$update_home_team->twitter}}" />
        </div>

         <div class="form-group">
        <label for="Instagram">Instagram</label>
          <input type="text" name="Instagram" placeholder="Instagram Profile Link" id="pcontact" class="form-control" value="{{$update_home_team->Instagram}}" />
          </div>

         <div class="form-group">
        <label for="contant">position</label>
          <input type="text" name="contant" placeholder="position" id="contant" class="form-control" value="{{$update_home_team->contant}}" />
          </div>

         <div class="form-group">
        <label for="Phone">Phone</label>
          <input type="text" name="Phone" placeholder="Phone" id="Phone" class="form-control" value="{{$update_home_team->Phone}}" />
          </div>

         <div class="form-group">
        <label for="Detels">details</label>
          <input type="text" name="Detels" placeholder="Detels" id="Detels" class="form-control" value="{{$update_home_team->Detels}}" />
          </div>

         <div class="form-group">
         <input type="hidden" name="oldphoto" id="pcontact" value="{{$update_home_team->photo}}" />
          <input type="file" name="photo" multiple="multiple" id="photo" class="form-control" />
          </div>
          <img style="width: 100px" src="{{ URL::to($update_home_team->photo)}}">
         <div class="form-group">
          <input type="submit" name="update-student" value="update working team" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 
@endsection
