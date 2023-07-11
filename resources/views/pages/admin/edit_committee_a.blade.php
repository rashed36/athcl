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
          <li class="breadcrumb-item active">1st Committee Member</li>
        </ol>

        <div>
          <a class="btn btn-primary" href="{{route('add_cst_cmt')}}"><h4>Add 1st Committee Member</h4></a>
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
            <form action="{{ url('/update_committee_a/'.$edit_committee_a->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                  <input type="text" name="name" required="name" placeholder="Name" id="name" class="form-control" value="{{$edit_committee_a->name}}" />
              </div>

                 <div class="form-group">
                <label for="facebook">Facebook</label>
                  <input type="text" name="facebook" required="facebook" placeholder="Facebook" id="facebook" class="form-control" " value="{{$edit_committee_a->facebook}}" />
                  </div>

                 <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" name="twitter" required="twitter" placeholder="Twitter" id="twitter" class="form-control" value="{{$edit_committee_a->twitter}}" />
                </div>

                 <div class="form-group">
                <label for="Instagram">Instagram</label>
                  <input type="text" name="Instagram" required="Instagram" placeholder="Instagram" id="pcontact" class="form-control" value="{{$edit_committee_a->Instagram}}" />
                  </div>

                 <div class="form-group">
                <label for="contant">Contant</label>
                  <input type="text" name="contant" required="contant"  placeholder="Contant" id="contant" class="form-control" value="{{$edit_committee_a->contant}}" />
                  </div>

                 <div class="form-group">
                <label for="c_number">C_number</label>
                  <input type="text" name="c_number" required="c_number" placeholder="C_number" id="c_number" class="form-control" value="{{$edit_committee_a->c_number}}" />
                  </div>

                 <div class="form-group">
                <label for="photo">Photo(size= 900*450)</label>
                  <input type="hidden" name="oldphoto" id="pcontact" value="{{$edit_committee_a->photo}}"/>
                  <input type="file" name="photo" placeholder="Photo" multiple="multiple" id="photo" class="form-control"  value="photo" /><br>
                  <img style="width: 100px" src="{{ URL::to($edit_committee_a->photo)}}">
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-student" value="update committee" class="btn btn-primary pull-right" >
                  
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
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

@endsection
