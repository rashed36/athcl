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
          <a class="btn btn-primary" href="{{route('all_news')}}"><h4>Add News</h4></a>
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
            <form action="{{route('insurt_news')}}" method="POST" enctype="multipart/form-data">
              @csrf
                 <div class="form-group">
                <label for="facebook">Title</label>
                  <input type="text" name="title" required="title" placeholder="Title" id="facebook" class="form-control" />
                  </div>
                 <div class="form-group">
                  <label for="twitter">Description</label>
                  <textarea name="discription"  required="discription" placeholder="Description" id="twitter" class="form-control"></textarea>
                </div>

                 <div class="form-group">
                <label for="pcontact">Photo(size= 850*530)</label>
                  <input type="file" name="photo" required="photo" placeholder="Photo" id="pcontact" class="form-control"  />
                  </div>
                 <div class="form-group">
                  <input type="submit" name="update-news" value="Add News" class="btn btn-primary pull-right" >
                  
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
