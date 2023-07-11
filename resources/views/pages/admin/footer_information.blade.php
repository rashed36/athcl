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
          <li class="breadcrumb-item active">Footer</li>
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
                    <th>Tel</th>
                    <th>Email </th>
                    <th>Working_Hours</th>
                    <th>facebook</th>
                    <th>twitter</th>
                    <th>google</th>
                    <th>pinterest</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Tel</th>
                    <th>Email </th>
                    <th>Working_Hours</th>
                    <th>facebook</th>
                    <th>twitter</th>
                    <th>google</th>
                    <th>pinterest</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td><?php $count=1; echo $count++; ?></td>
                    <td>{{$footer->Tel}}</td>
                    <td>{{$footer->Email}}</td>
                    <td>{{$footer->Working_Hours}}</td>
                    <td>{{$footer->facebook}}</td>
                    <td>{{$footer->twitter}}</td>
                    <td>{{$footer->google}}</td>
                    <td>{{$footer->pinterest}}</td>
                    <td>
                      <a href="{{ URL::to('edit_footer_information/'.$footer->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                  </tr>
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




















