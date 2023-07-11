@extends('layouts.master')
@section('all News')
{{'@HOME'}}
@endsection

@section('content')


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
    <form action="{{ url('/update_mony_donation/'.$edit_mony_donation->id) }}" method="POST" enctype="multipart/form-data">
       @csrf
         <div class="form-group">
          <label for="Name">Account Name: </label>
          <input type="text" name="Name" required="Name" placeholder="Name" id="Name" class="form-control" value="{{$edit_mony_donation->account_name}}" />
        </div>  


         <div class="form-group">
          <label for="Number">Number: </label>
          <input type="text" name="Number" required="Number" placeholder="Number" id="Number" class="form-control" value="{{$edit_mony_donation->number}}" />
        </div>  


         <div class="form-group">
          <label for="Description">Description: </label>
             <textarea name="Description" style="height: 200px" required="Description" placeholder="Description" id="Description" class="form-control">{{$edit_mony_donation->Description}}</textarea>
          </div> 



         <div class="form-group">
          <input type="submit" name="blood_donation" value="Update blood donation" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 

@endsection
