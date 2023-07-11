<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class contactuscontroller extends Controller
{
      public function contact_us() {
    	$contact_us= DB::table('contact_us')->first();
		 return view('pages.admin.contact_us',compact('contact_us'));
		// return view('layouts.master');
	}
      public function edit_contact_us($id) {
    	$edit_contact_us= DB::table('contact_us')->where('id',$id)->first();
		 return view('pages.admin.edit_contact_us', compact('edit_contact_us'));
		// return view('layouts.master');
	}

public function update_contact_us(request $request,$id){
       $validatedData = $request->validate([
         'call' => 'max:95',
         'duration' => 'max:50',
         'email' => 'max:100',
         'web' => 'max:50',
         'location' => 'max:100',
         'location_boot' => 'max:100',
       ]);
        $data= array();
        $data['call']= $request->call;
        $data['duration']= $request->duration;
        $data['email']= $request->email;
        $data['web']= $request->web;
        $data['location']= $request->location;
        $data['location_boot']= $request->location_boot;

        $data_insrt=DB::table('contact_us')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }




}
