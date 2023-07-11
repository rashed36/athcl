<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class slider_image_controller extends Controller
{
     public function slider_image() {
    	$slider_image= DB::table('slider_image')->get();
		 return view('pages.admin.slider_image',compact('slider_image'));
	}


     public function edit_slider_image($id) {
    	$edit_slider_image= DB::table('slider_image')->where('id',$id)->first();
		 return view('pages.admin.edit_slider_image',compact('edit_slider_image'));
	}


public function update_slider_image(request $request,$id){
       $validatedData = $request->validate([
         'f_content' => 'required|max:195',
         's_content' => 'required|max:10000',
         'photo_slider_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
       ]);
        $data= array();
        $data['f_content']= $request->f_content;
        $data['s_content']= $request->s_content;
        $image=$request->file('photo_slider_image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/slider_image/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(600,300)->encode('jpg')->save(Public_path('mastaring/backend/images/slider_image/'.$image_full_name));
            $data['slider_image']=$image_url;
            unlink($request->oldphoto);
             $data_insrt=DB::table('slider_image')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('slider_image')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
}





}
