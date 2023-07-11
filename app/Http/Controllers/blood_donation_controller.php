<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class blood_donation_controller extends Controller
{
     public function add_blood_donation(){
		 return view('pages.admin.add_blood_donation');
    }




   public function inpute_add_donation(request $request){
       $validatedData = $request->validate([
         'Name' => 'max:45',
         'Batch' => 'max:20',
         'Group' => 'max:20',
         'Phone' => 'max:15',
       ]);
        $data= array();
        $data['name']= $request->Name;
        $data['Batch']= $request->Batch;
        $data['Blood_Group']= $request->Group;
        $data['phone']= $request->Phone;
        $data_insrt=DB::table('blood_donation')->insert($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
    }





     public function blood_donation(){
      	$blood_donation= DB::table('blood_donation')->get();
		 return view('pages.admin.blood_donation', compact('blood_donation'));
    }


	  public function edit_blood_donation($id) {
    	$edit_blood_donation= DB::table('blood_donation')->where('id',$id)->first();
		 return view('pages.admin.edit_blood_donation', compact('edit_blood_donation'));
		// return view('layouts.master');
	}

public function update_blood_donation(request $request,$id){
       $validatedData = $request->validate([
         'Name' => 'max:45',
         'Batch' => 'max:20',
         'Group' => 'max:20',
         'Phone' => 'max:15',
       ]);
        $data= array();
        $data['name']= $request->Name;
        $data['Batch']= $request->Batch;
        $data['Blood_Group']= $request->Group;
        $data['phone']= $request->Phone;

        $data_insrt=DB::table('blood_donation')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }


           
    function delete_blood_donation($blood_donation_id){
        $delete_blood_donation= DB::table('blood_donation')->where('id',$blood_donation_id)->delete();
        if ($delete_blood_donation) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 


}
