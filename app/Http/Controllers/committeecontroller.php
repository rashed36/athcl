<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class committeecontroller extends Controller
{
    public function committee_a(){
      	$committee_a= DB::table('committee_a')->get();
		 return view('pages.admin.committee_a', compact('committee_a'));
    }
    public function add_cst_cmt(){
		 return view('pages.admin.add_cst_cmt');
    }
      public function edit_committee_a($id) {
    	$edit_committee_a= DB::table('committee_a')->where('id',$id)->first();
		 return view('pages.admin.edit_committee_a', compact('edit_committee_a'));
		// return view('layouts.master');
	}




   public function insurt_1st_cmt(request $request){
       $validatedData = $request->validate([
         'name' => 'max:100',
         'facebook' => 'max:100',
         'twitter' => 'max:100',
         'Instagram' => 'max:100',
         'contant' => 'max:100',
         'c_number' => 'max:100',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['facebook']= $request->facebook;
        $data['twitter']= $request->twitter;
        $data['Instagram']= $request->Instagram;
        $data['contant']= $request->contant;
        $data['c_number']= $request->c_number;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/1st_committee/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(300,250)->encode('jpg')->save(Public_path('mastaring/backend/images/1st_committee/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('committee_a')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('committee_a')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
    }





public function update_committee_a(request $request,$id){
       $validatedData = $request->validate([
         'name' => 'max:100',
         'facebook' => 'max:100',
         'twitter' => 'max:100',
         'Instagram' => 'max:100',
         'contant' => 'max:100',
         'c_number' => 'max:100',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['facebook']= $request->facebook;
        $data['twitter']= $request->twitter;
        $data['Instagram']= $request->Instagram;
        $data['contant']= $request->contant;
        $data['c_number']= $request->c_number;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/1st_committee/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(300,250)->encode('jpg')->save(Public_path('mastaring/backend/images/1st_committee/'.$image_full_name));
            $data['photo']=$image_url;
            $data_insrt=DB::table('committee_a')->where('id',$id)->update($data);
            unlink($request->oldphoto);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('committee_a')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
}


    function delete_committee_a($committee_a_id){
        $delete_committee_a= DB::table('committee_a')->where('id',$committee_a_id)->first();
        $image_url=$delete_committee_a->photo;
        unlink($image_url);
        $deletelatest_ccc= DB::table('committee_a')->where('id',$committee_a_id)->delete();
        if ($deletelatest_ccc) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 
}
