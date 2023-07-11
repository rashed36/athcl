@extends('layouts.master')
@section('all Registration')
{{'@AllRegistration'}}
@endsection

@section('content')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">All Online Registration</li>
        </ol>
        <div>
          {{-- <a class="btn btn-primary" href="{{route('add_reg')}}"><h4>Add New Campus</h4></a> --}}
        </div><br>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            All Registration Info Table </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>ছবি</th>
                    <th>ক্রমিক নং</th>
                    <th>রেজিস্টেশন নং</th>
                    <th>তারিখ</th>
                    <th>কোর্সের নাম</th>
                    <th>ব্যাচ নং</th>
                    <th>শিক্ষাথীর নাম (বাংলায়)</th>
                    <th>শিক্ষাথীর নাম (ইংরেজিতে)</th>
                    <th>জন্ম তারিখ</th>
                    <th>জাতীয়তা</th>
                    <th>পিতার নাম (বাংলায়)</th>
                    <th>পিতার নাম (ইংরেজিতে)</th>
                    <th>মাতার নাম (বাংলায়)</th>
                    <th>মাতার নাম (ইংরেজিতে)</th>
                    <th>জাতীয় পরিচয়পত্র নম্বর / জন্মনিব্দন নম্বর</th>
                    <th>মোবাইল নং</th>
                    <th>বর্তমান ঠিকানাঃ গ্রাম</th>
                    <th>পোস্ট</th>
                    <th>উপজেলার</th>
                    <th>জেলা</th>
                    <th>স্থায়ী ঠিকানাঃ গ্রাম</th>
                    <th>পোস্ট</th>
                    <th>উপজেলার</th>
                    <th>জেলা</th>
                    <th>শিক্ষাগত যোগ্যতার</th>
                    <th>মাধ্যম</th>
                    <th>মোবাইল</th>
                   </tr> 
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>ছবি</th>
                    <th>ক্রমিক নং</th>
                    <th>রেজিস্টেশন নং</th>
                    <th>তারিখ</th>
                    <th>কোর্সের নাম</th>
                    <th>ব্যাচ নং</th>
                    <th>শিক্ষাথীর নাম (বাংলায়)</th>
                    <th>শিক্ষাথীর নাম (ইংরেজিতে)</th>
                    <th>জন্ম তারিখ</th>
                    <th>জাতীয়তা</th>
                    <th>পিতার নাম (বাংলায়)</th>
                    <th>পিতার নাম (ইংরেজিতে)</th>
                    <th>মাতার নাম (বাংলায়)</th>
                    <th>মাতার নাম (ইংরেজিতে)</th>
                    <th>জাতীয় পরিচয়পত্র নম্বর / জন্মনিব্দন নম্বর</th>
                    <th>মোবাইল নং</th>
                    <th>বর্তমান ঠিকানাঃ গ্রাম</th>
                    <th>পোস্ট</th>
                    <th>উপজেলার</th>
                    <th>জেলা</th>
                    <th>স্থায়ী ঠিকানাঃ গ্রাম</th>
                    <th>পোস্ট</th>
                    <th>উপজেলার</th>
                    <th>জেলা</th>
                    <th>শিক্ষাগত যোগ্যতার</th>
                    <th>মাধ্যম</th>
                    <th>মোবাইল</th>
                  </tr>
                </tfoot>
                <tbody>
                    <?php $count=1; ?>
                    @foreach($allreg as $rowallreg)
                        <tr>
                            <td>{{$count++}}</td>
                            <td><img style="width: 100px" class="img-thumbnail" src="{{ URL::to($rowallreg->photo)}}" alt=""></td>
                            <td>{{$rowallreg->co_no}}</td>
                            <td>{{$rowallreg->reg_no}}</td>
                            <td>{{$rowallreg->date}}</td>
                            <td>{{$rowallreg->course_name}}</td>
                            <td>{{$rowallreg->batch_no}}</td>
                            <td>{{$rowallreg->stu_name_b}}</td>
                            <td>{{$rowallreg->stu_name_e}}</td>
                            <td>{{$rowallreg->dob}}</td>
                            <td>{{$rowallreg->nationality}}</td>
                            <td>{{$rowallreg->father_name_b}}</td>
                            <td>{{$rowallreg->father_name_e}}</td>
                            <td>{{$rowallreg->mothers_name_b}}</td>
                            <td>{{$rowallreg->mothers_name_e}}</td>
                            <td>{{$rowallreg->nid}}</td>
                            <td>{{$rowallreg->mobile}}</td>
                            <td>{{$rowallreg->b_village}}</td>
                            <td>{{$rowallreg->b_post}}</td>
                            <td>{{$rowallreg->b_upzila}}</td>
                            <td>{{$rowallreg->b_zilla}}</td>
                            <td>{{$rowallreg->s_village}}</td>
                            <td>{{$rowallreg->s_post}}</td>
                            <td>{{$rowallreg->s_upzilla}}</td>
                            <td>{{$rowallreg->s_zilla}}</td>
                            <td>{{$rowallreg->qulifaction}}</td>
                            <td>{{$rowallreg->maddom}}</td>
                            <td>{{$rowallreg->m_mobile}}</td>
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
