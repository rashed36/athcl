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
          <li class="breadcrumb-item active">Letest News</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('add_news')}}"><h4>Add News</h4></a>
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
                    <th>Time</th>
                    <th>Title </th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Time</th>
                    <th>Title </th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>




            <?php $count=1; ?>
            @foreach($all_news as $rowall_news)
                  <tr>
                    <td>{{$count++}}</td>
                    <td>{{$rowall_news->created_at}}</td>
                    <td>{{$rowall_news->title}}</td>
                    <td>{{$rowall_news->discription}}</td>
                    <td><img style="width: 100px" class="img-thumbnail" src="{{ URL::to($rowall_news->photo)}}" alt=""></td>
                    <td>
                      <a href="{{ URL::to('Editlatest_news/'.$rowall_news->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                      <br>
                      <br>
                      <a href="{{ URL::to('deletelatest_news/'.$rowall_news->id)}}" id="delete" class="btn btn-xs btn-danger" ><i class="fa fa-trash"></i> Delete</a>
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
