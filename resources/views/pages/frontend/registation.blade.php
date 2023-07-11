@extends('welcome')
@section('title')
{{'@Online Registration'}}
@endsection
@section('content')

 <div class="about-area area-padding" style="margin-top: 30px" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>অনলাইন রেজিস্টেশন</h2>
            </div>
            </div>
        </div>
		
        <div style="padding-top: 50px; border: 1px solid #E9E9E9; border-radius: 25px; background: #E9E9E9;" class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div style="" class="">
                <form  id="form1" action="{{route('insert_reg')}}" method="POST" enctype="multipart/form-data">
					@csrf
					@if ($errors->any())
              			<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
              			</div>
          			@endif
					
					<div  id="dvContainer" class="col-sm-12">
						<div style="padding: 10px;" class="card" id="makepdf">
                        
                        <div class="col-sm-9">
                            
                            <div class="text-center">
                                <h2 style="font-size: 25px;"><b>আত- তাকওয়া হেলথ কেয়ার এন্ড ট্রেইনিং সেন্টার</b></h2>
                                <p style="font-size: 15px;"><b>নিবন্ধন নং- 62/21 গভঃ রেজিঃ নং- C-175166/21</b></p>
                                <p style="font-size: 14px;"><b>অমৃত লাল দে কলেজ সংলগ্ন, তালুকদার ম্যানশন(৩য় তলা), হাসপাতাল রোড, বরিশাল।</b></p>
                                <button style="background: rgb(104, 102, 102);" type="button" class="ready-btn">ভর্তির রেজিস্টেশন ফরম</button>
                              </div>
                        </div>
  
									<div class="col-sm-3 imgUp float-left">
									<div style="padding-bottom: 10px;" class="">
										<img id="showImage" src="{{asset('public/mastaring/frontend')}}/img/no_image.png" style="width: 160px;height: 180px; border:1px solid rgb(71, 71, 71);">
									</div>
										<label style="width: 160px;" class="btn btn-primary">
											Upload<input type="file" name="photo" id="image" class="" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
									</label>
									</div>      
                       
                        <div class="row">
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">ক্রমিক নং:</label>
								<input style="height: 30px;" type="text" name="co_no" value="{{old('co_no')}}" placeholder="ক্রমিক নম্বর লিখুন..." class="form-control form-control-sm" required>
							</div>
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">রেজিস্টেশন নং:</label>
								<input style="height: 30px;" type="text" name="reg_no" value="{{$reg_no}}" placeholder="ক্রমিক নম্বর লিখুন..." class="form-control form-control-sm" readonly>
							</div>
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">তারিখ:</label>
								<input style="height: 30px;" type="date" value="{{ $date }}" name="date" class="form-control form-control-sm">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">কোর্সের নাম:</label>
                                <select style="height: 30px;" required name="course_name" value="{{old('course_name')}}" id="" class="form-control form-control-sm">
                                    <option value="">কোর্সের নাম নির্বাচন করুন</option>
									@foreach ($sel_course as $curse)
									<option value="{{ $curse->id}}">{{ $curse->curs_name_b}}</option>
									@endforeach 
                                </select>
							</div>
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">ব্যাচ নং:</label>
								<input style="height: 30px;" required type="text" value="{{old('batch_no')}}" name="batch_no" placeholder="ব্যাচ নং লিখুন..." class="form-control form-control-sm">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">শিক্ষাথীর নাম (বাংলায়):</label>
								<input style="height: 30px;" required type="text" value="{{old('stu_name_b')}}" name="stu_name_b" placeholder="শিক্ষাথীর নাম লিখুন (বাংলায়)..." class="form-control form-control-sm">
							</div>
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">শিক্ষাথীর নাম (ইংরেজিতে):</label>
								<input style="height: 30px;" required type="text" value="{{old('stu_name_e')}}" name="stu_name_e" placeholder="শিক্ষাথীর নাম লিখুন (ইংরেজিতে)..." class="form-control form-control-sm">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">জন্ম তারিখ:</label>
								<input style="height: 30px;" required type="date" value="{{old('dob')}}" name="dob"  class="form-control form-control-sm">
							</div>	
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">জাতীয়তা:</label>
								<input style="height: 30px;" required type="text" value="{{old('nationality')}}" name="nationality" placeholder="জাতীয়তা লিখুন..." class="form-control form-control-sm">
							</div>		
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">পিতার নাম (বাংলায়):</label>
								<input style="height: 30px;" required type="text" value="{{old('father_name_b')}}" name="father_name_b" placeholder="পিতার নাম লিখুন (বাংলায়)..." class="form-control form-control-sm">
							</div>
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">পিতার নাম (ইংরেজিতে):</label>
								<input style="height: 30px;" required type="text" value="{{old('father_name_e')}}" name="father_name_e" placeholder="পিতার নাম লিখুন (ইংরেজিতে)..." class="form-control form-control-sm">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">মাতার নাম (বাংলায়):</label>
								<input style="height: 30px;" required type="text" value="{{old('mothers_name_b')}}" name="mothers_name_b" placeholder="মাতার নাম লিখুন (বাংলায়)..." class="form-control form-control-sm">
							</div>
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">মাতার নাম (ইংরেজিতে):</label>
								<input style="height: 30px;" required type="text" value="{{old('mothers_name_e')}}" name="mothers_name_e" placeholder="মাতার নাম লিখুন (ইংরেজিতে)..." class="form-control form-control-sm">
							</div>
						</div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">জাতীয় পরিচয়পত্র নম্বর / জন্মনিব্দন নম্বর:</label>
								<input style="height: 30px;" required type="text" value="{{old('nid')}}" name="nid" placeholder="জাতীয় পরিচয়পত্র নম্বর / জন্মনিব্দন নম্বর লিখুন..." class="form-control form-control-sm">
							</div>
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">মোবাইল নং:</label>
								<input style="height: 30px;" required type="text" value="{{old('mobile')}}" name="mobile" placeholder="আপনার মোবাইল নাম্বার লিখুন..." class="form-control form-control-sm">
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">বর্তমান ঠিকানাঃ গ্রাম:</label>
								<input style="height: 30px;" required type="text" value="{{old('b_village')}}" name="b_village" placeholder="গ্রাম..." class="form-control form-control-sm">
							</div>	
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">পোস্ট:</label>
								<input style="height: 30px;" required type="text" value="{{old('b_post')}}" name="b_post" placeholder="পোস্ট..." class="form-control form-control-sm">
							</div>	
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">উপজেলার:</label>
								<input style="height: 30px;" required type="text" value="{{old('b_upzila')}}" name="b_upzila" placeholder="উপজেলার..." class="form-control form-control-sm">
							</div>
                            <div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">জেলা:</label>
								<input style="height: 30px;" required type="text" value="{{old('b_zilla')}}" name="b_zilla" placeholder="জেলা..." class="form-control form-control-sm">
							</div>			
						</div>
                        <div class="row">
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">স্থায়ী ঠিকানাঃ গ্রাম:</label>
								<input style="height: 30px;" required type="text" value="{{old('s_village')}}" name="s_village" placeholder="গ্রাম..." class="form-control form-control-sm">
							</div>	
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">পোস্ট:</label>
								<input style="height: 30px;" required type="text" value="{{old('s_post')}}" name="s_post" placeholder="পোস্ট..." class="form-control form-control-sm">
							</div>	
							<div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">উপজেলার:</label>
								<input style="height: 30px;" required type="text" value="{{old('s_upzilla')}}" name="s_upzilla" placeholder="উপজেলার..." class="form-control form-control-sm">
							</div>
                            <div class="col-sm-3 form-group">
								<label style="color: #444444; font-size: 13px;">জেলা:</label>
								<input style="height: 30px;" required type="text" value="{{old('s_zilla')}}" name="s_zilla" placeholder="জেলা..." class="form-control form-control-sm">
							</div>			
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label style="color: #444444; font-size: 13px;">শিক্ষাগত যোগ্যতার:</label>
								<input style="height: 30px;" required type="text" value="{{old('qulifaction')}}" name="qulifaction" placeholder="শিক্ষাগত যোগ্যতার..." class="form-control form-control-sm">
							</div>		
							{{-- <div class="col-sm-4 form-group">
								<label style="color: #444444 ; font-size: 13px;">মাধ্যম:</label>
								<input style="height: 30px;" required type="text" value="{{old('maddom')}}" name="maddom" placeholder="মাধ্যম..." class="form-control form-control-sm">
							</div>	
                            <div class="col-sm-4 form-group">
								<label  style="color: #444444; font-size: 13px;">মোবাইল:</label>
								<input  style="height: 30px;"  required type="text" value="{{old('m_mobile')}}" name="m_mobile" placeholder="মোবাইল..." class="form-control form-control-sm">
							</div>	
						</div>	--}}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label style="color: #444444 ; font-size: 13px;"></label>
                            </div>
                        </div>
						<div class="row">
							<div class="col-sm-9 form-group">
								<strong style="color: #444444; font-size: 13px; padding-left:18px;">----------------------</strong><br>
								<strong style="color: #444444; font-size: 13px; padding-left:18px;">শিক্ষার্থীর স্বাক্ষর</strong>
							</div>
							<div class="col-sm-3 form-group">
								<strong style="color: #444444; font-size: 13px;">------------------------------------</strong><br>
								<strong style="color: #444444; font-size: 13px;">ব্যবস্থাপনা পরিচালক স্বাক্ষর</strong>
							</div>
						</div>	
					</div>

						<button type="submit" class="btn btn-success">Submit</button>
						<button type="button" id="button" class="btn btn-info">Print</button>
						<h1></h1>
					</div>
				</form> 
            </div>
            </div>
        
	</div>
    </div>
 </div>
 
@endsection

  