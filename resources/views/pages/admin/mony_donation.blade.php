@extends('layouts.master')
@section('title')
{{'@Add Notice'}}
@endsection

@section('content')



    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active"> Donation</li>
        </ol>

        <div>
          <a class="btn btn-primary" href="{{route('donation_account')}}"><h4>Add Donation Account</h4></a>
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
                    <th>Account Name</th>
                    <th>Number</th>
                    <th>Description</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Account Name</th>
                    <th>Number</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>

<?php $count=1; ?>
@foreach($mony_donation as $rowmony_donation)

                  <tr>
                    <td><?php echo $count++; ?> </td>
                    <td>{{$rowmony_donation->account_name}}</td>
                    <td>{{$rowmony_donation->number}}</td>
                    <td>{{$rowmony_donation->Description}}</td>
                     <td> <a href="{{ URL::to('edit_mony_donation/'.$rowmony_donation->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      </td>
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




















