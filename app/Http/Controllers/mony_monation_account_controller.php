<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class mony_monation_account_controller extends Controller
{
      public function donation_account(){

    	$donation_account= DB::table('totle_cash')->first();
    	return view('pages.admin.donation_account',compact('donation_account'));
    }

     public function edit_donation_account($id){
     	$edit_donation_account= DB::table('totle_cash')->where('id',$id)->first();
    	return view('pages.admin.edit_donation_account', compact('edit_donation_account'));
    }

    
public function update_donation_account(request $request,$id){
       $validatedData = $request->validate([
         'type' => 'max:95',
         'Totle_Cash' => 'max:20',
         'content' => 'max:2000',
       ]);
        $data= array();
        $data['type']= $request->type;
        $data['Totle_Cash']= $request->Totle_Cash;
        $data['content']= $request->content;
        $data_insrt=DB::table('totle_cash')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }

}
