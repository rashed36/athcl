<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class StaffController extends Controller
{
    public function staff(){
        $all_staff= DB::table('staff')->get();
        return view('pages.admin.staff.all_staff',compact('all_staff'));
    }
    public function add_staff(){
        return view('pages.admin.staff.add_staff');
    }
 
    public function insert_staff(Request $request){
        // $validatedData = $request->validate([
        //   'name' => 'required',
        //   'position' => 'required',
        //   'phone' => 'required',
        //   'facebook' => 'required',
        //   'instragrm' => 'required',
        //   'twitter' => 'required',
        //   'role' => 'required',
        //   'description' => 'required',
        //   'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000',
        // ]);
         $data= array();
         $data['name']= $request->name;
         $data['position']= $request->position;
         $data['phone']= $request->phone;
         $data['facebook']= $request->facebook;
         $data['instragrm']= $request->instragrm;
         $data['twitter']= $request->twitter;
         $data['role']= $request->role;
         $data['description']= $request->description;
         $image=$request->file('photo');
         if ($image) {
             $image_name=hexdec(uniqid());
             $ext=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name.'.'.$ext;
             $upload_path='public/mastaring/backend/images/blog/';
             $image_url=$upload_path.$image_full_name;
             $resize=Image::make($image)->resize(358,313)->encode('jpg')->save(Public_path('mastaring/backend/images/blog/'.$image_full_name));
             $data['photo']=$image_url;
              $data_insrt=DB::table('staff')->insert($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Staff Update',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
             }else{
                  DB::table('staff')->insert($data);
                  $notification=array(
                     'messege'=>'Successfully Staff Inserted',
                     'alert-type'=>'success'
                      );
                   return redirect()->back()->with($notification);
         }
     }
 
 
     function delete_staff($delete_staff_id){
         $delete_staff= DB::table('staff')->where('id',$delete_staff_id)->first();
         $image_url=$delete_staff->photo;
         $deletelatest_news= DB::table('staff')->where('id',$delete_staff_id)->delete();
         unlink($image_url);
         if ($deletelatest_news) {
                 $notification=array(
                 'messege'=>'Successfully Staff deleted',
                 'alert-type'=>'success'
                  );
                 return redirect()->back()->with($notification);
         }    
     } 
 
 
    public function edit_staff($edit_staff_id){
        $Editstaff= DB::table('staff')->where('id',$edit_staff_id)->first();
        return view('pages.admin.staff.edit_staff',compact('Editstaff'));
    }
 
    public function update_staff(Request $request,$id){
            // $validatedData = $request->validate([
            //     'name' => 'required',
            //     'position' => 'required',
            //     'phone' => 'required',
            //     'facebook' => 'required',
            //     'instragrm' => 'required',
            //     'twitter' => 'required',
            //     'role' => 'required',
            //     'description' => 'required',
            //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1000',
            // ]);
            $data= array();
            $data['name']= $request->name;
            $data['position']= $request->position;
            $data['phone']= $request->phone;
            $data['facebook']= $request->facebook;
            $data['instragrm']= $request->instragrm;
            $data['twitter']= $request->twitter;
            $data['role']= $request->role;
            $data['description']= $request->description;
            $image=$request->file('photo');
            if ($image) {
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/mastaring/backend/images/blog/';
                $image_url=$upload_path.$image_full_name;
                $resize=Image::make($image)->resize(358,313)->encode('jpg')->save(Public_path('mastaring/backend/images/blog/'.$image_full_name));
                $data['photo']=$image_url;
                unlink($request->oldphoto);
                $data_insrt=DB::table('staff')->where('id',$id)->update($data);
                if ($data_insrt) {
                    $notification=array(
                    'messege'=>'Successfully Staff Update',
                    'alert-type'=>'success'
                    );
                return Redirect('staff')->with($notification);
                }
                }else{
                    DB::table('staff')->where('id',$id)->update($data);
                    $notification=array(
                        'messege'=>'Successfully Staff Updated',
                        'alert-type'=>'success'
                        );
                        return Redirect('staff')->with($notification);
            }
    }
}
