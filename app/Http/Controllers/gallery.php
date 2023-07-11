<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class gallery extends Controller
{
   public function allgallery(){
   	$gallery_name= DB::table('gallery_name')->get();
	return view('pages.admin.allgallery', compact('gallery_name'));
   }


   public function insurt_gallery(request $request){
       $validatedData = $request->validate([
         'gallery_name' => 'max:140',
         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['gallery_name']= $request->gallery_name;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/gallery/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(300,250)->encode('jpg')->save(Public_path('mastaring/backend/images/gallery/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('gallery_name')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('gallery_name')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }

    }



   public function all_view_gallery($id){
   	$all_view_gallery= DB::table('gallery_name')->where('id',$id)->first();
   	$all_view_gallery_shows= DB::table('gallery')->where('gallery_id',$id)->get();

	return view('pages.admin.all_view_gallery', compact('all_view_gallery','all_view_gallery_shows'));
   }








   public function insurt_gallery_photos(request $request,$id){
        $data= array();
        $image=$request->file('photo');
        foreach ($image as $image) {
        $data['gallery_id']=$id;
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/gallery/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(600,450)->encode('jpg')->save(Public_path('mastaring/backend/images/gallery/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('gallery')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             }
            }else{
                 DB::table('gallery')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
        }return Redirect()->back()->with($notification);
    }





    function delete_galary_iamge($photo_id){
        $delete_news= DB::table('gallery')->where('id',$photo_id)->first();
        $image_url=$delete_news->photo;
        $deletelatest_news= DB::table('gallery')->where('id',$photo_id)->delete();
        unlink($image_url);
        if ($deletelatest_news) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 



    function delete_photo_title($photo_id){
        $delete_photos= DB::table('gallery')->where('gallery_id',$photo_id)->get();
		foreach ($delete_photos as $image) {
		        $image_url_photo=$image->photo;
		        $deletelatest_news= DB::table('gallery')->where('gallery_id',$photo_id)->delete();
		        unlink($image_url_photo);
		    }

        $delete_home_image= DB::table('gallery_name')->where('id',$photo_id)->first();
        $image_url=$delete_home_image->photo;
    $delete_name= DB::table('gallery_name')->where('id',$photo_id)->delete();
        unlink($image_url);
        if ($delete_name) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        } 




    } 















}
