<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use App\Models\packageModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PackageContoller extends Controller
{
    function packages_savedata(Request $req)
   {

    $tbl=new packageModel;
    $profile="PHOTO".time().".".$req->file1->extension();
    $req->file1->move(public_path('photo'),$profile);
   
     $tbl->header=$req->header;
     $tbl->image=$profile;
     $tbl->short_desc=$req->shortdesc;
     $tbl->long_desc=$req->longdesc;
     $tbl->price=$req->price;
     $tbl->discount=$req->discount;
    
 
       $tbl->save();
       return redirect('package-add')->with('success','Inserted Successfully');
   }

   function packages_listdata()
   {
    $user=packageModel::get();
    return view('adminpanel/package_list',['users'=>$user]); 
    
   }

   function packages_editdata($id)
   {
     $user=packageModel::where('id',$id)->first(); 
     return view('adminpanel/packages_edit',['user'=>$user]);
   }

   function packages_deletedata($id)
   {
     $user=DB::table('tbl_package')->where('id',$id)->delete();
   return redirect('packages_listdata')->with('delete','Data deleted successfully');
   }

   function packages_updatedata(Request $req)
  {
    
    $image=$req->image;
    if(!empty($image))
    {
      $profile="PHOTO".time().".".$req->image->extension();
      $req->image->move(public_path('photo'),$profile);
      $header=$req->header;
      $id=$req->id;
      $short_desc=$req->short_desc;
      $long_desc=$req->long_desc;
      $price=$req->price;
      $discount=$req->discount;

      Db::table('tbl_package')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'header'=>$header,
                              'image'=>$profile,
                              'short_desc'=>$short_desc,
                              'long_desc'=>$long_desc,
                              'price'=>$price,
                              'discount'=>$discount,
                            ]);
      
      return redirect('packages_listdata')->with('update','Data updated successfully');
    }
    else 
    {
      $header=$req->header;
      $id=$req->id;
      $short_desc=$req->short_desc;
      $long_desc=$req->long_desc;
      $price=$req->price;
      $discount=$req->discount;

      Db::table('tbl_package')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'header'=>$header,
                              'short_desc'=>$short_desc,
                              'long_desc'=>$long_desc,
                              'price'=>$price,
                              'discount'=>$discount,
                            ]);
      return redirect('packages_listdata')->with('update','Data updated successfully');
    }
     
  }
}
