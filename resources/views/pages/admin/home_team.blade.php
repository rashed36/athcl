@extends('layouts.master')
@section('title')
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
          <li class="breadcrumb-item active">Working Person</li>
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
                    <th>Name</th>
                    <th>Facebook Link</th>
                    <th>twitter Link</th>
                    <th>Instagram</th>
                    <th>position</th>
                    <th>phone</th>
                    <th>Detels</th>
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
                    <th>Instagram Link</th>
                    <th>position</th>
                    <th>phone</th>
                    <th>Detels</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>



<?php $count= 1; ?>
@foreach($home_team as $rowhome_team)
                  <tr>
                    <td>{{$count++}}</td>
                    <td>{{$rowhome_team->name}}</td>
                    <td>{{$rowhome_team->facebook}}</td>
                    <td>{{$rowhome_team->twitter}}</td>
                    <td>{{$rowhome_team->Instagram}}</td>
                    <td>{{$rowhome_team->contant}}</td>
                    <td>{{$rowhome_team->Phone}}</td>
                    <td>{{$rowhome_team->Detels}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($rowhome_team->photo)}}" alt=""></td>
                    <td>
                      <a href="{{URL::to('update_home_team/'.$rowhome_team->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                  </tr>
@endforeach








                </tbody>
              </table>
            </div>
          </div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

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
