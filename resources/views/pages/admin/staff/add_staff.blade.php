@extends('layouts.master')
@section('Add Staff')
{{'@AddStaff'}}
@endsection

@section('content')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Add Staff</li>
        </ol>
        <div>
          <a class="btn btn-primary" href="{{route('staff')}}"><h4>All Staff</h4></a>
        </div>
        <div class="row" style="margin-left: 50px; margin-top: 20px">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="" style="width: 400px">
            <form action="{{route('insert_staff')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="name" id="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" name="position" placeholder="position" id="position" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" placeholder="phone" id="phone" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" placeholder="facebook" id="facebook" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="instragrm">Instragram</label>
                    <input type="text" name="instragrm" placeholder="instragrm" id="instragrm" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" name="twitter" placeholder="twitter" id="twitter" class="form-control" />
                </div>
                 <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description"  placeholder="Description" id="description" class="form-control"></textarea>
                </div>

                 <div class="form-group">
                    <label for="pcontact">Photo(size= 850*530)</label>
                    <input type="file" name="photo" placeholder="Photo" id="pcontact" class="form-control"  />
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="staff">Staff</option>
                        <option value="doctors">Doctors</option>
                    </select>
                </div>
                 <div class="form-group">
                  <input type="submit" name="add-staff" value="Add Staff" class="btn btn-primary pull-right" >
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
