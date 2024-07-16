<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use App\Models\packageModel;
use App\Models\AboutModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class AboutController extends Controller
{
  function about_savedata(Request $req)
  {
    $tbl=new AboutModel;
    $profile="PHOTO".time().".".$req->file1->extension();
    $req->file1->move(public_path('photo'),$profile);
    $tbl->image=$profile;
    $tbl->short_desc=$req->short_desc;

    $tbl->save();
    return redirect('about_add')->with('insert','Data inserted successfully');
    
  }
    function about_listdata()
    {
      $users=AboutModel::get();
      return view('adminpanel/about_list',['users'=>$users]);
    }

    function about_editdata($id)
    {
      $users=AboutModel::where('id',$id)->first(); 
      return view('adminpanel/about_edit',['users'=>$users]);
    }

    function about_deletedata($id)
    {
      $user=DB::table('tbl_about')->where('id',$id)->delete();
    return redirect('about_listdata')->with('delete','Data deleted successfully');
    }

    function about_updatedata(Request $req)
   {
    $image=$req->image;
    if(!empty($image))
    {
      $profile="PHOTO".time().".".$req->image->extension();
      $req->image->move(public_path('photo'),$profile);
      $id=$req->id;
      $short_desc=$req->short_desc;

      Db::table('tbl_about')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'image'=>$profile,
                              'short_desc'=>$short_desc,
                            ]);
      
      return redirect('about_listdata')->with('update','Data updated successfully');
    }
    else 
    {
      $id=$req->id;
      $short_desc=$req->short_desc; 

      Db::table('tbl_about')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'short_desc'=>$short_desc,
                            ]);
    return redirect('about_listdata')->with('update','Data updated successfully');
    }
      
   }
}
