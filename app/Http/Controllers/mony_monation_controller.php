<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class mony_monation_controller extends Controller
{
       public function mony_donation() {
    	$mony_donation= DB::table('donation')->get();
		 return view('pages.admin.mony_donation', compact('mony_donation'));
		// return view('layouts.master');
	}

	   public function edit_mony_donation($eddit_id) {
         $edit_mony_donation= DB::table('donation')->where('id',$eddit_id)->first();
		 return view('pages.admin.edit_mony_donation',compact('edit_mony_donation'));
		// return view('layouts.master');
	}


public function update_mony_donation(request $request,$id){
       $validatedData = $request->validate([
         'Name' => 'max:99',
         'Number' => 'max:17',
         'Description' => 'max:2000',
       ]);
        $data= array();
        $data['account_name']= $request->Name;
        $data['number']= $request->Number;
        $data['Description']= $request->Description;

        $data_insrt=DB::table('donation')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }


}
