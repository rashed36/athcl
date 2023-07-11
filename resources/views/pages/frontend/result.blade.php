@extends('welcome')
@section('title')
{{'@HOME'}}
@endsection
@section('content')

 <div class="about-area area-padding" style="margin-top: 30px" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>পরীক্ষার ফলাফল</h2>
            </div>
            </div>
        </div>
        <div style="padding-top: 50px;" class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="">
               <form action="">
                   <div class="form-group">
                    <label for="">Select Cource</label>
                    <select name="" id="" placeholder="Select Cource" class="form-control form-control">
                        <option value="">Select Cource</option>
                    </select>
                   </div>
                   <div class="form-group">
                        <label for="">Select Batch</label>
                        <select name="" id="" placeholder="Select Batch" class="form-control form-control">
                            <option value="">Select Batch</option>
                        </select>
                   </div>
                   <div class="form-group">
                       <label for="">Enter Reg No</label>
                       <input type="text" name="cource" placeholder="Enter Reg Number" class="form-control form-control">
                   </div>
                   <div class="form-group">
                        <label for="">Enter Roll No</label>
                        <input type="text" name="cource" placeholder="Enter Roll Number" class="form-control form-control">
                   </div>
                   <input type="submit" name="Submit" value="Submit" class="btn btn-info">
               </form>
            </div>
            </div>
        </div>
    </div>
 </div>
@endsection

  