<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class jumaa_member_controller extends Controller
{
     public function add_member() {
		 return view('pages.admin.add_member');
		// return view('layouts.master');
	}

   public function insurt_member(request $request){
       $validatedData = $request->validate([
         'name' => 'max:100',
         'Batch' => 'max:16',
         'type_of_member' => 'max:110',
         'position_name' => 'max:140',
         'Year_of_joining' => 'max:100',
         'phone' => 'max:40',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['Batch']= $request->Batch;
        $data['type_of_member']= $request->type_of_member;
        $data['position_name']= $request->position_name;
        $data['Year_of_joining']= $request->Year_of_joining;
        $data['phone']= $request->phone;
        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/all_member/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(100,100)->encode('jpg')->save(Public_path('mastaring/backend/images/all_member/'.$image_full_name));
            $data['photo']=$image_url;
             $data_insrt=DB::table('all_mamber')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('all_mamber')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
    }


     public function all_jumaa_member() {
    	$all_jumaa_member= DB::table('all_mamber')->get();
		 return view('pages.admin.all_jumaa_member', compact('all_jumaa_member'));
		// return view('layouts.master');
	}
	 public function edit_jumaa_member($id) {
    	$edit_jumaa_member= DB::table('all_mamber')->where('id',$id)->first();
		 return view('pages.admin.edit_jumaa_member', compact('edit_jumaa_member'));
		// return view('layouts.master');
	}
public function update_jumaa_member(request $request,$id){
       $validatedData = $request->validate([
         'name' => 'max:100',
         'Batch' => 'max:16',
         'type_of_member' => 'max:110',
         'position_name' => 'max:140',
         'Year_of_joining' => 'max:100',
         'phone' => 'max:40',
         'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:191',
       ]);
        $data= array();
        $data['name']= $request->name;
        $data['Batch']= $request->Batch;
        $data['type_of_member']= $request->type_of_member;
        $data['position_name']= $request->position_name;
        $data['Year_of_joining']= $request->Year_of_joining;
        $data['phone']= $request->phone;

        $image=$request->file('photo');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/all_member/';
            $image_url=$upload_path.$image_full_name;
            $resize=Image::make($image)->resize(100,100)->encode('jpg')->save(Public_path('mastaring/backend/images/all_member/'.$image_full_name));
            $data['photo']=$image_url;
            unlink($request->oldphoto);
             $data_insrt=DB::table('all_mamber')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('all_mamber')->where('id',$id)->update($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }

     }



    function delete_jumaa_member($member_id){
        $delete_news= DB::table('all_mamber')->where('id',$member_id)->first();
        $image_url=$delete_news->photo;
                 unlink($image_url);
        $delete_jumaa_member= DB::table('all_mamber')->where('id',$member_id)->delete();
        if ($delete_jumaa_member) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 







}
