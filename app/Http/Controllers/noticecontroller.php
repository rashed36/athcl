<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DB;
use File;

class noticecontroller extends Controller
{
    public function notice(){
    	$allnotice= DB::table('noticebord')->get();
    	return view('pages.admin.notice', compact('allnotice'));
    }
    public function add_notice(){
    	return view('pages.admin.add_notice');
    }


    public function insurt_notice(request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);

        $data= array();
        $data['text']= $request->text;
        $file=$request->file('file');
        if ($file) {

           
    
            $fileName = time().'.'.$request->file->extension();  
            $upload_path='public/mastaring/backend/images/Notice/';
            $file_url=$upload_path.$fileName;
            $request->file->move(public_path('mastaring/backend/images/Notice/'), $fileName);
            $data['file']=$file_url;
            $data_insrt=DB::table('noticebord')->insert($data);
            if ($data_insrt) {
                $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
             }
            }else{
                 DB::table('noticebord')->insert($data);
                 $notification=array(
                    'messege'=>'Successfully Post Inserted',
                    'alert-type'=>'success'
                     );
                  return redirect()->back()->with($notification);
        }
    }



// public function editnotic($notice_id){
//    $editnotic= DB::table('noticebord')->where('id',$notice_id)->first();
//    return view('pages.admin.editnotic',compact('editnotic'));
// }


// public function update_notice(request $request,$id){
    
//         $data= array();
//         $data['text']= $request->text;
//         $file=$request->file('file');
//         if ($image) {
//             $image_name=hexdec(uniqid());
//             $ext=strtolower($image->getClientOriginalExtension());
//             $image_full_name=$image_name.'.'.$ext;
//             $upload_path='public/mastaring/backend/images/Notice/';
//             $image_url=$upload_path.$image_full_name;
//             $resize=Image::make($image)->resize(500,450)->encode('jpg')->save(Public_path('mastaring/backend/images/Notice/'.$image_full_name));
//             $data['file']=$image_url;
//             unlink($request->oldphoto);
//              $data_insrt=DB::table('noticebord')->where('id',$id)->update($data);
//              if ($data_insrt) {
//                 $notification=array(
//                 'messege'=>'Successfully Post Update',
//                 'alert-type'=>'success'
//                  );
//              return Redirect()->back()->with($notification);
//              }
//             }else{
//                  DB::table('noticebord')->where('id',$id)->update($data);
//                  $notification=array(
//                     'messege'=>'Successfully Post Inserted',
//                     'alert-type'=>'success'
//                      );
//                   return redirect()->back()->with($notification);
//         }
// }



    function deletenotic($id){
        $notic= DB::table('noticebord')->where('id',$id)->first();
        // $image_url=$notic->file;
        //  unlink($image_url);
        $notic= DB::table('noticebord')->where('id',$id)->delete();
        if ($notic) {
                $notification=array(
                'messege'=>'Successfully Post deleted',
                'alert-type'=>'success'
                 );
                return redirect()->back()->with($notification);
        }    
    } 



public function all_notic(){
    $allnotice= DB::table('noticebord')->get();
    return view('pages.frontend.all_notice', compact('allnotice'));
}


}
