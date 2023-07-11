@extends('layouts.master')
@section('title')
{{'@Notice'}}
@endsection

@section('content')


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Notce</li>
        </ol>
         <div>
           <a href="{{route('add_notice')}}"><h3 class="btn btn-primary">Add Notice</h3></a>
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
                    <th>File</th>
                    <th>Text</th>
                    <th>Action</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>File</th>
                    <th>Text</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                      $count=1;
                   ?>
                @foreach($allnotice as $rownotice)
                  <tr>
                    <td>{{$count++}}</td>
                    <td><a href="{{$rownotice->file}}">Download</a></td>
                    <td>{{$rownotice->text}}</td>
                    <td>
                      {{-- <a href="{{ URL::to('editnotic/'.$rownotice->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a> --}}
                      <a href="{{ URL::to('deletenotic/'.$rownotice->id)}}" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
                  </tr>
                @endforeach



                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
    @endsection




















