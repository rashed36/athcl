<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Planning_controller extends Controller
{
       public function Planning() {
    	$Planning= DB::table('planning')->get();
		 return view('pages.admin.Planning',compact('Planning'));
		// return view('layouts.master');
	}

       public function edit_Planning($id) {
    	$edit_Planning= DB::table('planning')->where('id',$id)->first();
		 return view('pages.admin.edit_Planning', compact('edit_Planning'));
		// return view('layouts.master');
	}

public function update_Planning(request $request,$id){
       $validatedData = $request->validate([
         'Planning' => 'max:3000',
         'Starting' => 'max:3000',
         'Success' => 'max:3000',
       ]);
        $data= array();
        $data['Planning']= $request->Planning;
        $data['Starting']= $request->Starting;
        $data['Success']= $request->Success;

        $data_insrt=DB::table('planning')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }

}
