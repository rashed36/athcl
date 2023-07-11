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
          <li class="breadcrumb-item active">Add 1st Committe</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('committee_a')}}"><h4>All 1st Committee Member</h4></a>
        </div><br>
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
              <form action="{{route('insurt_1st_cmt')}}" method="POST" enctype="multipart/form-data">

              @csrf

                <div class="form-group">
                  <label for="name">Name</label>
                    <input type="text" name="name" required="name" placeholder="Name" id="name" class="form-control" />
                </div>

                   <div class="form-group">
                  <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" required="facebook" placeholder="Facebook" id="facebook" class="form-control" "/>
                    </div>

                   <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" required="twitter" placeholder="Twitter" id="twitter" class="form-control" />
                  </div>

                   <div class="form-group">
                  <label for="Instagram">Instagram</label>
                    <input type="text" name="Instagram" required="Instagram" placeholder="Instagram" id="pcontact" class="form-control"/>
                    </div>

                   <div class="form-group">
                  <label for="contant">Contant</label>
                    <input type="text" name="contant" required="contant" placeholder="Contant" id="contant" class="form-control"/>
                    </div>

                   <div class="form-group">
                  <label for="c_number">C_Number</label>
                    <input type="text" name="c_number" required="c_number" placeholder="C_Number" id="c_number" class="form-control"/>
                    </div>

                   <div class="form-group">
                  <label for="photo">Photo(Size=520*640)</label>
                    <input type="file" name="photo" required="photo" placeholder="Photo" multiple="multiple" id="photo" class="form-control"/>
                    </div>
                   <div class="form-group">
                    <input type="submit" name="update-student" value="Add committee" class="btn btn-primary pull-right" >
                    
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
