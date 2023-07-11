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
          <li class="breadcrumb-item active">All Member</li>
        </ol>
         <div>
           <a href="{{route('add_member')}}"><h3 class="btn btn-primary">Add Member</h3></a>
         </div>

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
                    <th>type of member</th>
                    <th>Position Name</th>
                    <th>Year of joining</th>
                    <th>Phone Number</th>
                    <th>Photo</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Batch</th>
                    <th>type of member</th>
                    <th>Position Name</th>
                    <th>Year of joining</th>
                    <th>Phone Number</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>






@foreach($all_jumaa_member as $rowall_mamber)

                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$rowall_mamber->name}}</td>
                    <td>{{$rowall_mamber->Batch}}</td>
                    <td>{{$rowall_mamber->type_of_member}}</td>
                    <td>{{$rowall_mamber->position_name}}</td>
                    <td>{{$rowall_mamber->Year_of_joining}}</td>
                    <td>{{$rowall_mamber->phone}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($rowall_mamber->photo)}}" alt=""></td>
                    <td>
                      <a href="{{ URL::to('edit_jumaa_member/'.$rowall_mamber->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      <br>
                      <br>
                      <a href="{{ URL::to('delete_jumaa_member/'.$rowall_mamber->id)}}" class="btn btn-xs btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
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
