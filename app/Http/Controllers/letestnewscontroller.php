<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class letestnewscontroller extends Controller
{
   public function all_news(){
   	$all_news= DB::table('latest_news')->get();
   	return view('pages.admin.Latest_News',compact('all_news'));
   }
   public function add_news(){
   	return view('pages.admin.add_News');
   }





   public function insurt_news(request $request){
       $validatedData = $request->validate([
         'title' => 'required|max:180',
         'discription' => 'required|max:3000',
         'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['title']= $request->title;
        $data['discription']= $request->discription;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/blog/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(450,250)->encode('jpg')->save(Public_path('mastaring/backend/images/blog/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('latest_news')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('latest_news')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
    }


    function deletelatest_news($deletelatest_news_id){
        $delete_news= DB::table('latest_news')->where('id',$deletelatest_news_id)->first();
        $image_url=$delete_news->photo;
        $deletelatest_news= DB::table('latest_news')->where('id',$deletelatest_news_id)->delete();
        unlink($image_url);
        if ($deletelatest_news) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 


   public function Editlatest_news($Editlatest_news_id){
   	$Editlatest_news= DB::table('latest_news')->where('id',$Editlatest_news_id)->first();
   	return view('pages.admin.edditadd_News',compact('Editlatest_news'));
   }




public function update_news(request $request,$id){
       $validatedData = $request->validate([
         'title' => 'required|max:195',
         'discription' => 'required|max:3000',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['title']= $request->title;
        $data['discription']= $request->discription;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/blog/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(450,250)->encode('jpg')->save(Public_path('mastaring/backend/images/blog/'.$image_full_name));
            $data['photo']=$image_url;
            unlink($request->oldphoto);
             $data_insrt=DB::table('latest_news')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('latest_news')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
}




    function blog_description($blog_description_id){
        $blog_description= DB::table('course')->where('id',$blog_description_id)->first();  
        return view('pages.frontend.blog_description',compact('blog_description')); 
    }






}
