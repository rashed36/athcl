<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class CourseController extends Controller
{
    public function course(){
        $all_course= DB::table('course')->get();
        return view('pages.admin.course.all_course',compact('all_course'));
    }
    public function add_course(){
        return view('pages.admin.course.add_course');
    }
 
    public function insert_course(Request $request){
        $validatedData = $request->validate([
          'curs_name' => 'required',
          'curs_name_b' => 'required',
          'cours_duration' => 'required',
          'description' => 'required',
          'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:191',
        ]);
         $data= array();
         $data['curs_name']= $request->curs_name;
         $data['curs_name_b']= $request->curs_name_b;
         $data['cours_duration']= $request->cours_duration;
         $data['description']= $request->description;
         $image=$request->file('photo');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/mastaring/backend/images/blog/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->resize(450,250)->encode('jpg')->save(Public_path('mastaring/backend/images/blog/'.$image_full_name));
             $data['photo']=$image_url;
              $data_insrt=DB::table('course')->insert($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Course Update',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
             }else{
                  DB::table('course')->insert($data);
                  $notification=array(
                     'messege'=>'Successfully Course Inserted',
                     'alert-type'=>'success'
                      );
                   return redirect()->back()->with($notification);
         }
     }
 
 
     function delete_course($delete_course_id){
         $delete_course= DB::table('course')->where('id',$delete_course_id)->first();
         $image_url=$delete_course->photo;
         $deletelatest_news= DB::table('course')->where('id',$delete_course_id)->delete();
         unlink($image_url);
         if ($deletelatest_news) {
                 $notification=array(
                 'messege'=>'Successfully Course deleted',
                 'alert-type'=>'success'
                  );
                 return redirect()->back()->with($notification);
         }    
     } 
 
 
    public function edit_course($edit_course_id){
        $Editcourse= DB::table('course')->where('id',$edit_course_id)->first();
        return view('pages.admin.course.edit_course',compact('Editcourse'));
    }
 
 
 
 
    public function update_course(Request $request,$id){
            $validatedData = $request->validate([
                'curs_name' => 'required',
                'curs_name_b' => 'required',
                'cours_duration' => 'required',
                'description' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:191',
            ]);
            $data= array();
            $data['curs_name']= $request->curs_name;
            $data['curs_name_b']= $request->curs_name_b;
            $data['cours_duration']= $request->cours_duration;
            $data['description']= $request->description;
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
                $data_insrt=DB::table('course')->where('id',$id)->update($data);
                if ($data_insrt) {
                    $notification=array(
                    'messege'=>'Successfully Course Update',
                    'alert-type'=>'success'
                    );
                return Redirect('course')->with($notification);
                }
                }else{
                    DB::table('course')->where('id',$id)->update($data);
                    $notification=array(
                        'messege'=>'Successfully Course Updated',
                        'alert-type'=>'success'
                        );
                        return Redirect('course')->with($notification);
            }
    }
 
 
}
