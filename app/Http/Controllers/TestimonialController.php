<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use App\Models\packageModel;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class TestimonialController extends Controller
{
    function testimonial_savedata(Request $req)
    {
 
     $tbl=new TestimonialModel;
     $profile="PHOTO".time().".".$req->file1->extension();
     
     $req->file1->move(public_path('photo'),$profile);
    
      $tbl->name=$req->name;
      $tbl->image=$profile;
      $tbl->designation=$req->designation;
      $tbl->message=$req->message;
  
        $tbl->save();
        return redirect('testimonial-add')->with('success','Inserted Successfully');
    }
 
    function testimonial_listdata()
    {
     $user=TestimonialModel::get();
     return view('adminpanel/testimonial_list',['users'=>$user]); 
     
    }
 
    function testimonial_editdata($id)
    {
      $user=TestimonialModel::where('id',$id)->first(); 
      return view('adminpanel/testimonial_edit',['user'=>$user]);
    }
 
    function testimonial_deletedata($id)
    {
      $user=DB::table('tbl_testimonial')->where('id',$id)->delete();
    return redirect('testimonial_listdata')->with('delete','Data deleted successfully');
    }
 
    function testimonial_updatedata(Request $req)
   {
    $image=$req->image;
    if(!empty($image))
    {
      $profile="PHOTO".time().".".$req->image->extension();
      $req->image->move(public_path('photo'),$profile);
      $id=$req->id;
      $name=$req->name;
      $designation=$req->designation;
      $message=$req->message;
     

      Db::table('tbl_testimonial')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'name'=>$name,
                              'image'=>$profile,
                              'designation'=>$designation,
                              'message'=>$message,
                            ]);
      
      return redirect('testimonial_listdata')->with('update','Data updated successfully');
    }
    else 
    {
      $id=$req->id;
      $name=$req->name;
      $designation=$req->designation;
      $message=$req->message;

      Db::table('tbl_testimonial')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'name'=>$name,
                              'designation'=>$designation,
                              'message'=>$message,
                            ]);
    return redirect('testimonial_listdata')->with('update','Data updated successfully');
    }
      
   }
}
