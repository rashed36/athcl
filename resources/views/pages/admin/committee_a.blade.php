@extends('layouts.master')
@section('all News')
{{'@HOME'}}
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

        <div>
          <a class="btn btn-primary" href="{{route('add_cst_cmt')}}"><h4>Add 1st Committee Member</h4></a>
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
                    <th>Facebook Link</th>
                    <th>twitter Link</th>
                    <th>Instagram</th>
                    <th>Content</th>
                    <th>Phone Number</th>
                    <th>Photo</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Facebook Link</th>
                    <th>twitter Link</th>
                    <th>Instagram</th>
                    <th>Content</th>
                    <th>Phone Number</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>


<?php $count=1; ?>
@foreach($committee_a as $rowcommittee_a)
                  <tr>
                    <td>{{$count++}}</td>
                    <td>{{$rowcommittee_a->name}}</td>
                    <td>{{$rowcommittee_a->facebook}}</td>
                    <td>{{$rowcommittee_a->twitter}}</td>
                    <td>{{$rowcommittee_a->Instagram}}</td>
                    <td>{{$rowcommittee_a->c_number}}</td>
                    <td>{{$rowcommittee_a->contant}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($rowcommittee_a->photo)}}" alt=""></td>
                    <td>
                      <a href="{{ URL::to('edit_committee_a/'.$rowcommittee_a->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      <br>
                      <br>
                      <a href="{{ URL::to('delete_committee_a/'.$rowcommittee_a->id)}}" class="btn btn-xs btn-danger" id="delete" ><i class="fa fa-trash"></i> Delete</a>
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
