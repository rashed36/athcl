@extends('layouts.master')
@section('all course')
{{'@AllCourse'}}
@endsection

@section('content')



    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Course</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('add_course')}}"><h4>Add Course</h4></a>
        </div><br>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Course Table </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Bangla Name </th>
                    <th>Course Duriation</th>
                    <th>Photo</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Bangla Name </th>
                    <th>Course Duriation</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php $count=1; ?>
                    @foreach($all_course as $rowall_course)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$rowall_course->curs_name}}</td>
                            <td>{{$rowall_course->curs_name_b}}</td>
                            <td>{{$rowall_course->cours_duration}}</td>
                            <td><img style="width: 100px" class="img-thumbnail" src="{{ URL::to($rowall_course->photo)}}" alt=""></td>
                            <td>
                            <a href="{{ URL::to('edit_course/'.$rowall_course->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                            <br>
                            <br>
                            <a href="{{ URL::to('delete_course/'.$rowall_course->id)}}" id="delete" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i> Delete</a>
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
