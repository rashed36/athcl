<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class home_team_controller extends Controller
{

    public function home_team() {
    	$home_team= DB::table('home_team')->get();
		 return view('pages.admin.home_team',compact('home_team'));
		// return view('layouts.master');
	}

    public function update_home_team($eddit_id) {
         $update_home_team= DB::table('home_team')->where('id',$eddit_id)->first();
		 return view('pages.admin.update_home_team',compact('update_home_team'));
		// return view('layouts.master');
	}




public function home_time_update(request $request,$id){
       $validatedData = $request->validate([
         'name' => 'required|max:50',
         'facebook' => 'required|max:150',
         'twitter' => 'required|max:150',
         'Instagram' => 'required|max:150',
         'contant' => 'required|max:300',
         'Phone' => 'required|max:15',
         'Detels' => 'required|max:3000',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['facebook']= $request->facebook;
        $data['twitter']= $request->twitter;
        $data['Instagram']= $request->Instagram;
        $data['contant']= $request->contant;
        $data['Phone']= $request->Phone;
        $data['Detels']= $request->Detels;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/home_tim_img/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(400,350)->encode('jpg')->save(Public_path('mastaring/backend/images/home_tim_img/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('home_team')->where('id',$id)->update($data);
            unlink($request->oldphoto);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('home_team')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
}











}
