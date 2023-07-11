@extends('welcome')
@section('title')
{{'@All Member'}}
@endsection
@section('content')
<div class="table-responsive justify-content-center col-sm-8 col-lg-offset-2 " style="margin-top: 100px; margin-bottom: 160px; " >
<h3 style="background: #ddd; padding: 10px; margin-top: 20px; margin-bottom: 30px;">Total Jumaa Members: {{$all_count}}</h3>
  <table id="data" class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Batch</th>
        <th>Type of member</th>
        <th>Position Name</th>
        <th>Year of joining</th>
        <th>Phone</th>
        <th>photo</th>
        
        
        </tr>
      </thead>
    <tbody>



<?php $count=1; ?>
@foreach($all_home_member as $row_member)             
             <tr>
              <td> <?php  echo $count++; ?> </td>
              <td>{{$row_member->name}}</td>
              <td>{{$row_member->Batch}}</td>
              <td>{{$row_member->type_of_member}}</td>
              <td>{{$row_member->position_name}}</td>
              <td>{{$row_member->Year_of_joining}}</td>
              <td>{{$row_member->phone}}</td>
              <td><img style="width: 100px;"  src="{{URL::to($row_member->photo)}}" alt=""></td>
             
             </tr>
@endforeach





    </tbody>
  </table>
</div>

@endsection