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
          <li class="breadcrumb-item active">1st Committee Member</li>
        </ol>

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
                    <th>Planning</th>
                    <th>Starting</th>
                    <th>Success</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Planning</th>
                    <th>Starting</th>
                    <th>Success</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>




@foreach($Planning as $rowPlanning)
                  <tr>
                    <td> <?php $count=1; echo $count++; ?> </td>
                    <td>{{$rowPlanning->Planning}}</td>
                    <td>{{$rowPlanning->Starting}}</td>
                    <td>{{$rowPlanning->Success}}</td>
                    <td>
                      <a href="{{ URL::to('edit_Planning/'.$rowPlanning->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
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




















