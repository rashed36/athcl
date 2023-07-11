<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class footerinformationcontroller extends Controller
{
      public function footer() {
    	$footer= DB::table('footer')->first();
		 return view('pages.admin.footer_information',compact('footer'));
		// return view('layouts.master');
	}
	  public function edit_footer_information($id) {
    	$edit_footer_information= DB::table('footer')->where('id',$id)->first();
		 return view('pages.admin.edit_footer_information', compact('edit_footer_information'));
		// return view('layouts.master');
	}
public function update_footer_information(request $request,$id){
       $validatedData = $request->validate([
         'Tel' => 'max:40',
         'Email' => 'max:60',
         'Working_Hours' => 'max:50',
         'facebook' => 'max:180',
         'twitter' => 'max:180',
         'google' => 'max:180',
         'pinterest' => 'max:180',
         'address' => 'required'
       ]);
        $data= array();
        $data['Tel']= $request->Tel;
        $data['Email']= $request->Email;
        $data['Working_Hours']= $request->Working_Hours;
        $data['facebook']= $request->facebook;
        $data['twitter']= $request->twitter;
        $data['google']= $request->google;
        $data['pinterest']= $request->pinterest;
        $data['address']= $request->address;

        $data_insrt=DB::table('footer')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }





}
