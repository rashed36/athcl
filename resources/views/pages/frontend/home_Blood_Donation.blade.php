@extends('welcome')
@section('title')
{{'@All Member'}}
@endsection
@section('content')
<div class="table-responsive justify-content-center col-sm-8 col-lg-offset-2 " style="margin-top: 100px; margin-bottom: 30px; " >
<h3 style="background: #ddd; padding: 10px; margin-top: 20px; margin-bottom: 30px;">Total Blood Donation: {{$all_count_blood}}</h3>
  <table id="data" class="table table-hover table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Batch</th>
        <th>Blood Group</th>
        <th>Join Time</th>
        <th>Phone</th>
        
        </tr>
      </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Batch</th>
        <th>Blood Group</th>
        <th>Join Time</th>
        <th>Phone</th>
        
        </tr>
      </tfoot>
    <tbody>
            

<?php $count=0;  ?>
@foreach($home_Blood_Donation as $row_hbd)
             
             <tr>
              <td><?php echo ++$count; ?></td>
              <td>{{$row_hbd->name}}</td>
              <td>{{$row_hbd->Batch}}</td>
              <td>{{$row_hbd->Blood_Group}}</td>
              <td>{{$row_hbd->Date_time}}</td>
              <td>{{$row_hbd->phone}}</td>
             
             </tr>
@endforeach




    </tbody>
  </table>
</div>

@endsection