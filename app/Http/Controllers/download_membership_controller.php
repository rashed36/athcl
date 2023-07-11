<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class download_membership_controller extends Controller
{
    public function download_membership_ad() {
    	$download= DB::table('download_membership')->first();
		 return view('pages.admin.download_membership_ad', compact('download'));
		// return view('layouts.master');
	}
	  public function edit_download($id) {
    	$edit_download= DB::table('download_membership')->where('id',$id)->first();
		 return view('pages.admin.edit_download', compact('edit_download'));
		// return view('layouts.master');
	}

public function Update_download_membership(request $request,$id){
       $validatedData = $request->validate([
         'title' => 'required|max:195',
         'Description' => 'required|max:3000',
         
       ]);
    	$data=array();
    	$data['title']=$request->title;
    	$data['Description']=$request->Description;
    	$image=$request->file('file');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/mastaring/backend/images/file/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['file']=$image_url;
            DB::table('download_membership')->where('id',$id)->update($data);
            unlink($request->oldphoto);
             $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}else{
    		 DB::table('download_membership')->where('id',$id)->update($data);
    		 $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}
}


}
