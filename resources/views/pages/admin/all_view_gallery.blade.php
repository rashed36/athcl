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
          <li class="breadcrumb-item active">All Gallery</li>
        </ol>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif  
        <div class="row" style="margin-left: 50px; margin-top: 20px"> 
          <div class="" style="width: 400px">
            <form action="{{ url('/insurt_gallery_photos/'.$all_view_gallery->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                <label for="facebook">Add Gallery title</label>
                
                  <input type="file" name="photo[]" multiple="multiple" required="add_gallery" placeholder="Add Gallery title" id="facebook" class="form-control" />
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-news" value="Add Gallery title" class="btn btn-primary pull-right" >
                 </div>
             </form>
          </div>
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
                    <th>Photo</th>
                    <th>Action</th>
                  </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>

<?php $count=1; ?>
@foreach($all_view_gallery_shows as $row_gallery_shows)

                  <tr>
                    <td>{{$count++}}</td>
                    <td><img style="width: 100px;" class="img-thumbnail" src="{{URL::to($row_gallery_shows->photo)}}" alt=""></td>
                    <td>
                      <a href="{{ URL::to('delete_galary_iamge/'.$row_gallery_shows->id) }}" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
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



















