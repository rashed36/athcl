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
    <form action="{{ url('/update_blood_donation/'.$edit_blood_donation->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
         <div class="form-group">
          <label for="Name">Name: </label>
          <input type="text" name="Name" required="Name" placeholder="Name" id="Name" class="form-control" value="{{$edit_blood_donation->name}}" />
        </div>  


         <div class="form-group">
          <label for="Batch">Batch: </label>
          <input type="text" name="Batch" required="Batch" placeholder="Batch" id="twitter" class="form-control" value="{{$edit_blood_donation->Batch}}" />
        </div>  

         <div class="form-group">
          <label for="Group">Blood Group: </label>
          <input type="text" name="Group" required="Group" placeholder="Group" id="Group" class="form-control" value="{{$edit_blood_donation->Blood_Group}}" />
        </div>  

         <div class="form-group">
          <label for="Phone">Phone: </label>
          <input type="text" name="Phone" required="Phone" placeholder="Phone" id="Phone" class="form-control" value="{{$edit_blood_donation->phone}}" />
        </div>  

 
         <div class="form-group">
          <input type="submit" name="blood_donation" value="Update blood donation" class="btn btn-primary pull-right" >
          
         </div>
     </form>
  </div>
</div> 

@endsection
