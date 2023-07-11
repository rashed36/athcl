<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;


class middle_photo_controller extends Controller
{
     public function middle_photo(){

    	$middle_photo= DB::table('middle_photo')->first();
    	return view('pages.admin.middle_photo',compact('middle_photo'));
    }
     public function eddit_middle_photo($id){
     	$eddit_middle_photo= DB::table('middle_photo')->where('id',$id)->first();
    	return view('pages.admin.eddit_middle_photo', compact('eddit_middle_photo'));
    }



public function update_middle_photo(request $request,$id){
       $validatedData = $request->validate([
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1000',
       ]);
        $data= array();
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/middle_photo/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(670,350)->encode('jpg')->save(Public_path('mastaring/backend/images/middle_photo/'.$image_full_name));
            $data['photo']=$image_url;
            unlink($request->oldphoto);
             $data_insrt=DB::table('middle_photo')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('middle_photo')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
}





}
