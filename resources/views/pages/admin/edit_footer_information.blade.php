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
    <form action="{{ url('/update_footer_information/'.$edit_footer_information->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
      <div class="form-group">
        <label for="Call">Tel</label>
          <input type="text" name="Tel" placeholder="Tel: +***********" id="Call" class="form-control" value="{{$edit_footer_information->Tel}}" />
      </div>

         <div class="form-group">
        <label for="facebook">Email</label>
          <input type="text" name="Email" placeholder=" ****Gmail.com " id="facebook" class="form-control" " value="{{$edit_footer_information->Email}}" />
          </div>

         <div class="form-group">
          <label for="twitter">Working Hours</label>
          <input type="text" name="Working_Hours" placeholder=" 9am-5pm" id="twitter" class="form-control" value="{{$edit_footer_information->Working_Hours}}" />
        </div>

         <div class="form-group">
        <label for="pcontact">facebook</label>
          <input type="text" name="facebook" placeholder="https://www.*******.com" id="pcontact" class="form-control" value="{{$edit_footer_information->facebook}}" />
          </div>

         <div class="form-group">
        <label for="contant">twitter</label>
          <input type="$text" name="twitter" id="contant" placeholder="https://www.*******.com" class="form-control" value="{{$edit_footer_information->twitter}}"/>
          </div>

         <div class="form-group">
        <label for="Bootom_Location">google</label>
          <input type="text" name="google" id="Bootom_Location" placeholder="https://www.*******.com" class="form-control" value="{{$edit_footer_information->google}}" />
          </div>

         <div class="form-group">
        <label for="Bootom_Location">pinterest</label>
          <input type="text" name="pinterest" id="Bootom_Location" placeholder="https://www.*******.com" class="form-control" value="{{$edit_footer_information->pinterest}}" />
          </div>

          <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" cols="10" rows="10" class="form-control" >{{$edit_footer_information->address}}</textarea>
              </div>
         <div class="form-group">
          <input type="submit" name="Update" value="Update Footer Info" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 







    @endsection




















