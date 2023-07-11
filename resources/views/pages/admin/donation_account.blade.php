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
          <li class="breadcrumb-item active">All Blood Donation</li>
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
                    <th>type</th>
                    <th>Totle_Cash</th>
                    <th>content</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>type</th>
                    <th>Totle_Cash</th>
                    <th>content</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>



                  <tr>
                    <td>1</td>
                    <td>{{$donation_account->type}}</td></td>
                    <td>{{$donation_account->Totle_Cash}}</td></td>
                    <td>{{$donation_account->content}}</td></td>
                    <td>
                      <a href="{{URL::to('edit_donation_account/'.$donation_account->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                  </tr>





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




















