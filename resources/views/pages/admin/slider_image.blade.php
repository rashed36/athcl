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
          <li class="breadcrumb-item active">All Slider Image</li>
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
                    <th>First Content</th>
                    <th>Second Content</th>
                    <th>Photo</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>First Content</th>
                    <th>Second Content</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>




            <?php $count=1; ?>
            @foreach($slider_image as $row_slider_image)
                  <tr>
                    <td>{{$count++}}</td>
                    <td>{{$row_slider_image->f_content}}</td>
                    <td>{{$row_slider_image->s_content}}</td>
                    <td><img style="width: 100px" class="img-thumbnail" src="{{ URL::to($row_slider_image->slider_image)}}" alt=""></td>
                    <td>
                      <a href="{{ URL::to('edit_slider_image/'.$row_slider_image->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      <br>
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
