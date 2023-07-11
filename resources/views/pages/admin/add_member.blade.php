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
          <li class="breadcrumb-item active">All Members</li>
        </ol>

         <div>
           <a href="{{route('all_jumaa_member')}}"><h3 class="btn btn-primary">Add Member</h3></a>
         </div>
        <!-- DataTables Example -->
 
          <div class="row" style="margin-left: 50px; margin-top: 20px">
            <div class="" style="width: 400px">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form action="{{route('insurt_member')}}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                    <input type="text" name="name" required="name" placeholder="Name" id="name" class="form-control" />
                </div>

                   <div class="form-group">
                  <label for="Batch">Batch</label>
                    <input type="text" name="Batch" required="Batch" placeholder="Batch" id="Batch" class="form-control"/>
                    </div>

                   <div class="form-group">
                    <label for="type_of_member">Type of member</label>
                    <input type="text" name="type_of_member" required="type_of_member" placeholder="type of member" id="type_of_member" class="form-control" />
                  </div>

                   <div class="form-group">
                    <label for="position_name">Position Name</label>
                    <input type="text" name="position_name" required="position_name" placeholder="position name" id="position_name" class="form-control" />
                  </div>

                   <div class="form-group">
                    <label for="Year_of_joining">Year_of_joining</label>
                    <input type="text" name="Year_of_joining" required="Year_of_joining" placeholder="Year of joining" id="Year_of_joining" class="form-control" />
                  </div>


                   <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" name="phone" required="phone" placeholder="phone" id="phone" class="form-control" />
                  </div>

                   <div class="form-group">
                  <label for="photo">Photo(Size=520*640)</label>
                    <input type="file" name="photo" required="photo" placeholder="Photo" multiple="multiple" id="photo" class="form-control"/>
                    </div>
                   <div class="form-group">
                    <input type="submit" name="update_student" value="Add Member" class="btn btn-primary pull-right" >
                    
                   </div>
               </form>
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




















