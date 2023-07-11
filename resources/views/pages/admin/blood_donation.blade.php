@extends('layouts.master')
@section('all News')
{{'@Blood Donation'}}
@endsection

@section('content')



    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Blood Donation</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('add_blood_donation')}}"><h4>Add Blood Donation</h4></a>
        </div><br>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Blood Group</th>
                    <th>Phone</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>Blood Group</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>

<?php $count=1; ?>
@foreach($blood_donation as $rowblood_donation)

                  <tr>
                    <td>{{$count++}}</td>
                    <td>{{$rowblood_donation->name}}</td></td>
                    <td>{{$rowblood_donation->Batch}}</td></td>
                    <td>{{$rowblood_donation->Blood_Group}}</td></td>
                    <td>{{$rowblood_donation->phone}}</td></td>
                    <td>
                      <a href="{{ URL::to('edit_blood_donation/'.$rowblood_donation->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      <a href="{{ URL::to('delete_blood_donation/'.$rowblood_donation->id)}}" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                  </tr>
@endforeach



                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website <a href="http://techno-71.com" target="_blank">techno-71.com</a></span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->






















@endsection
