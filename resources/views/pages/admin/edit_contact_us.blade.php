@extends('layouts.master')
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
    <form action="{{ url('/update_contact_us/'.$edit_contact_us->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      <div class="form-group">
        <label for="call">Call</label>
          <input type="text" name="call" required="call" placeholder="Phone: +088***********" id="call" class="form-control" value="{{$edit_contact_us->call}}" />
      </div>

         <div class="form-group">
        <label for="duration">Time Duration</label>
          <input type="text" name="duration" required="duration" placeholder="Monday-Friday (9am-5pm)" id="duration" class="form-control" " value="{{$edit_contact_us->duration}}" />
          </div>

         <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" required="email" placeholder="****Gmail.com" id="email" class="form-control" value="{{$edit_contact_us->email}}" />
        </div>

         <div class="form-group">
        <label for="pcontact">Web</label>
          <input type="text" name="web" required="web" placeholder="www.*******.com" id="web" class="form-control" value="{{$edit_contact_us->web}}" />
          </div>

         <div class="form-group">
        <label for="contant">Location</label>
          <input type="$text" name="location" required="location" id="contant" placeholder="location Location" class="form-control" value="{{$edit_contact_us->location}}"/>
          </div>

         <div class="form-group">
        <label for="location_boot">Bootom Location</label>
          <input type="text" name="location_boot" required="location_boot" id="location_boot" placeholder="Your Bootom Location" class="form-control" value="{{$edit_contact_us->location_boot}}" />
          </div>
         <div class="form-group">
          <input type="submit" name="update-student" value="update Contact Us" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 













    @endsection




















