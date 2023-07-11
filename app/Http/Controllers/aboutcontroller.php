<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class aboutcontroller extends Controller
{
    public function about(){
    	$aboutview= DB::table('about')->first();
    	return view('pages.admin.about',compact('aboutview'));
    }
    public function eddit_about($eddit_about){
    	$abouteddit= DB::table('about')->where('id',$eddit_about)->first();
    	return view('pages.admin.eddit_about', compact('abouteddit'));
    }
    public function update_about(request $request,$id){
         $validatedData = $request->validate([
         'name' => 'required|max:191',
         'title' => 'required|max:191',
         'description' => 'required|max:3000',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['title']= $request->title;
        $data['description']= $request->description;

        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/about/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(500,350)->encode('jpg')->save(Public_path('mastaring/backend/images/about/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('about')->where('id',$id)->update($data);
             unlink($request->oldphoto);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('about')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
   


    }
}
