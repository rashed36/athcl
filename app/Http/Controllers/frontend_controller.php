<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class frontend_controller extends Controller
{
 
public function frontendhome(){
	$about_details= DB::table('about')->first();
	$all_notice= DB::table('noticebord')->latest()->first();

	$all_blog= DB::table('course')->latest()->paginate(3);
	$home_team= DB::table('staff')->where('role','staff')->latest()->paginate(3);
	$dr_team= DB::table('staff')->get()->where('role','doctors');

	$middle_photo= DB::table('middle_photo')->first();
	$contact_us= DB::table('contact_us')->first();
	$footer_information= DB::table('footer')->first();
	$planning= DB::table('planning')->first();
	$slider_image= DB::table('slider_image')->get();
	return view('pages.frontend.home', compact('about_details','all_notice','all_blog','dr_team','home_team','middle_photo','contact_us','footer_information','planning','slider_image'));
} 
public function about_details_page(){
	$about_details_page= DB::table('about')->first();
	return view('pages.frontend.about_details_page', compact('about_details_page'));
}
public function download_membership_home(){
	$download_membership_home= DB::table('download_membership')->first();
	return view('pages.frontend.download_membership_home', compact('download_membership_home'));
}
public function team_description($id){
	$team_description= DB::table('staff')->where('id',$id)->first();
	return view('pages.frontend.team_description', compact('team_description'));
}
public function all_home_member(){
	$all_home_member= DB::table('all_mamber')->get();
	$all_count= DB::table('all_mamber')->count();
	return view('pages.frontend.all_home_member', compact('all_home_member','all_count'));
}
public function ast_committee_member(){
	$ast_committee_member= DB::table('committee_a')->get();
	$home_team= DB::table('staff')->get()->where('role','doctors');
	$all_count= DB::table('committee_a')->count();
	return view('pages.frontend.1st_committee_member', compact('ast_committee_member','all_count','home_team'));
}
public function home_Blood_Donation(){
	$home_Blood_Donation= DB::table('blood_donation')->get();
	$all_count_blood= DB::table('blood_donation')->count();
	return view('pages.frontend.home_Blood_Donation', compact('home_Blood_Donation','all_count_blood'));
}
public function home_donation(){
	$totle_cash= DB::table('totle_cash')->first();
	$home_donation= DB::table('donation')->get();
	return view('pages.frontend.home_mony_donation', compact('home_donation','totle_cash'));
}



public function home_gallery(){
	$gallery_name= DB::table('gallery_name')->get();
	// $gallery_name= DB::table('gallery_name')->join('gallery','gallery_name.id','gallery.gallery_id')->get();
	return view('pages.frontend.home_gallery', compact('gallery_name'));
}


public function view_all_photo($id){
	$gallery= DB::table('gallery')->where('gallery_id',$id)->get();
	return view('pages.frontend.view_all_photo', compact('gallery'));
}





public function home_all_news(){
	$all_blog_news= DB::table('course')->get();
	return view('pages.frontend.view_all_photo_home', compact('all_blog_news'));
}



public function contactus_home(){
	$contact_us_home= DB::table('contact_us')->first();
	$footer_information= DB::table('footer')->first();
	$footer_information_home= DB::table('footer')->first();
	return view('pages.frontend.contact_us_home', compact('contact_us_home','footer_information_home','footer_information'));
}


public function qualifation(){
	return view('pages.frontend.qualifation');
}

public function admation(){
	return view('pages.frontend.admation');
}

public function result(){
	return view('pages.frontend.result');
}

public function notice_board(){
	$all_notice= DB::table('noticebord')->get();
	return view('pages.frontend.notice',compact('all_notice'));
}

public function directors(){
	$ast_committee_member= DB::table('committee_a')->get();
	$home_team= DB::table('staff')->get()->where('role','staff');
	$all_count= DB::table('committee_a')->count();
	return view('pages.frontend.directors', compact('ast_committee_member','all_count','home_team'));
}

public function campus(){
	$allcampus= DB::table('campus')->get();
	return view('pages.frontend.campus', compact('allcampus'));
}

public function single_campus($id){
	$single_campus= DB::table('campus')->where('id',$id)->first();
	return view('pages.frontend.single_campus', compact('single_campus'));
}

public function registation(){
	$sel_course= DB::table('course')->get();
	$reg = DB::table('registation')->orderBy('id','desc')->first();
        if($reg == null){
            $firstReg = '202200';
            $data['reg_no'] = $firstReg+1;
        }else{
            $reg = DB::table('registation')->orderBy('id','desc')->first()->reg_no;
            $data ['reg_no'] = $reg+1;
        }
         $data ['date'] = date('Y-m-d');
	return view('pages.frontend.registation',$data, compact('sel_course'));
}


public function insert_reg(Request $request){
	$validatedData = $request->validate([
	  'co_no' => 'required',
	  'date' => 'required',
	  'course_name' => 'required',
	  'batch_no' => 'required',
	  'stu_name_b' => 'required',
	  'stu_name_e' => 'required',
	  'dob' => 'required',
	  'nationality' => 'required',
	  'father_name_b' => 'required',
	  'father_name_e' => 'required',
	  'mothers_name_b' => 'required',
	  'mothers_name_e' => 'required',
	  'nid' => 'required',
	  'mobile' => 'required',
	  'b_village' => 'required',
	  'b_post' => 'required',
	  'b_upzila' => 'required',
	  'b_zilla' => 'required',
	  's_village' => 'required',
	  's_post' => 'required',
	  's_upzilla' => 'required',
	  's_zilla' => 'required',
	  'qulifaction' => 'required',
	//   'maddom' => 'required',
	//   'm_mobile' => 'required',
	  'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000',
	]);
	 $data= array();
	 $data['co_no']= $request->co_no;
	 $data['reg_no']= $request->reg_no;
	 $data['date']= $request->date;
	 $data['course_name']= $request->course_name;
	 $data['batch_no']= $request->batch_no;
	 $data['stu_name_b']= $request->stu_name_b;
	 $data['stu_name_e']= $request->stu_name_e;
	 $data['dob']= $request->dob;
	 $data['nationality']= $request->nationality;
	 $data['father_name_b']= $request->father_name_b;
	 $data['father_name_e']= $request->father_name_e;
	 $data['mothers_name_b']= $request->mothers_name_b;
	 $data['mothers_name_e']= $request->mothers_name_e;
	 $data['nid']= $request->nid;
	 $data['mobile']= $request->mobile;
	 $data['b_village']= $request->b_village;
	 $data['b_post']= $request->b_post;
	 $data['b_upzila']= $request->b_upzila;
	 $data['b_zilla']= $request->b_zilla;
	 $data['s_village']= $request->s_village;
	 $data['s_post']= $request->s_post;
	 $data['s_upzilla']= $request->s_upzilla;
	 $data['s_zilla']= $request->s_zilla;
	 $data['qulifaction']= $request->qulifaction;
	//  $data['maddom']= $request->maddom;
	//  $data['m_mobile']= $request->m_mobile;
	 $image=$request->file('photo');
	 if ($image) {
		 $image_name=hexdec(uniqid());
		 $ext=strtolower($image->getClientOriginalExtension());
		 $image_full_name=$image_name.'.'.$ext;
		 $upload_path='public/mastaring/backend/images/blog/';
		 $image_url=$upload_path.$image_full_name;
		 $resize=Image::make($image)->resize(55,45)->encode('jpg')->save(Public_path('mastaring/backend/images/blog/'.$image_full_name));
		 $data['photo']=$image_url;
		  $data_insrt=DB::table('registation')->insert($data);
		  if ($data_insrt) {
			 $notification=array(
			 'messege'=>'Successfully Staff Update',
			 'alert-type'=>'success'
			  );
		  return Redirect('success_reg')->with($notification);
		  }
		 }else{
			  DB::table('registation')->insert($data);
			  $notification=array(
				 'messege'=>'Successfully Staff Inserted',
				 'alert-type'=>'success'
				  );
			   return redirect('success_reg')->with($notification);
	 }
 }

 public function success_reg(){
	// $allcampus= DB::table('campus')->get();
	return view('pages.frontend.success_reg');
}


public function coursefee(){
	return view('pages.frontend.course_fee');
}






}
