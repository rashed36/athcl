<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;

class CampusController extends Controller
{
    public function campus() {
    	$all_campus= DB::table('campus')->get();
		 return view('pages.admin.campus.all_campus',compact('all_campus'));
	}

    public function add_campus(){
        return view('pages.admin.campus.add_campus');
    }

    
    public function insert_campus(Request $request){
        // $validatedData = $request->validate([
        //     'location' => 'required',
        //     'name' => 'required',
        //     'address' => 'required',
        //     'mobile' => 'required',
        //     'long_description' => 'required',
        //     'map_link' => 'required',
        // ]);
         $data= array();
         $data['location']= $request->location;
         $data['name']= $request->name;
         $data['address']= $request->address;
         $data['mobile']= $request->mobile;
         $data['long_description']= $request->long_description;
         $data['map_link']= $request->map_link;
 
         $data_insrt=DB::table('campus')->insert($data);
              if ($data_insrt) {
                 $notification=array(
                 'messege'=>'Successfully Campus Added',
                 'alert-type'=>'success'
                  );
              return Redirect()->back()->with($notification);
              }
            }

       public function edit_campus($id) {
    	$Editcampus= DB::table('campus')->where('id',$id)->first();
		 return view('pages.admin.campus.edit_campus', compact('Editcampus'));
	}

    public function update_campus(request $request,$id){
    //    $validatedData = $request->validate([
    //     'location' => 'required',
    //     'name' => 'required',
    //     'address' => 'required',
    //     'mobile' => 'required',
    //     'long_description' => 'required',
    //     'map_link' => 'required',
    //    ]);
        $data= array();
        $data['location']= $request->location;
        $data['name']= $request->name;
         $data['address']= $request->address;
         $data['mobile']= $request->mobile;
        $data['long_description']= $request->long_description;
        $data['map_link']= $request->map_link;

        $data_insrt=DB::table('campus')->where('id',$id)->update($data);
             if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
           }

    public function delete_campus($delete_campus_id){
            $deletelatest_news= DB::table('campus')->where('id',$delete_campus_id)->delete();
            if ($deletelatest_news) {
                    $notification=array(
                    'messege'=>'Successfully Campus deleted',
                    'alert-type'=>'success'
                     );
                    return redirect()->back()->with($notification);
            }    
        } 

        public function allreg() {
            $allreg= DB::table('registation')->get();
             return view('pages.admin.regestation.all_regestation',compact('allreg'));
        }
}
