<?php

namespace App\Http\Controllers;
use App\Models\SliderModel;
use App\Models\packageModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminController extends Controller
{
  public function cnt()
  {
    $total_booking['total_bkn']=Db::table('tbl_booking')->count();
    $total_user['total_usr']=Db::table('tbl_users')->count();
    $total_slider['total_sldr']=Db::table('tbl_sliders')->count();
    $total_about['total_abt']=Db::table('tbl_about')->count();
    $total_package['total_pkg']=Db::table('tbl_package')->count();
    $new_booking['new_bkn']=Db::table('tbl_booking')->where('status','=','3')->count();
    $confirm_booking['confrm_bkn']=Db::table('tbl_booking')->where('status','=','1')->count();
    $cancel_booking['cnl_bkn']=Db::table('tbl_booking')->where('status','=','2')->count();
    $total_issues['total_isue']=Db::table('tbl_issue')->count();
    $total_enquiries['total_enq']=Db::table('tbl_query')->count();
    $read_enquiries['read_enq']=Db::table('tbl_query')->where('status','=','2')->count();
    $new_enquiries['new_enq']=Db::table('tbl_query')->where('status','=','3')->count();
    // echo "<pre>";
    // print_r($total_package);
    
    // return view('adminpanel/home',['total_booking'=>$total_booking],['total_user'=>$total_user],['total_slider'=>$total_slider],['total_about'=>$total_about],['total_package'=>$total_package]);
    return view('adminpanel/home',compact('total_about','total_slider','total_user','total_booking','total_package','new_booking','confirm_booking','cancel_booking','total_issues','total_enquiries','read_enquiries','new_enquiries'));
   
  }

  /* Admin profile operation */
  function admin_login(Request $req)
  {
    $username=$req->username;
    $password=$req->password;

    $user=Db::table('tbl_admin')
              ->where('username',$username)
              ->where('password',$password)
              ->get();

    // echo "<pre>";
    // print_r($user);

    if($user->isNotEmpty())
    {
      $req->session()->put('loginad',$user[0]);
      return redirect('cnt');
      // return redirect('admin_home');
      // return $this->cnt();
    }
    else
    return redirect('admin_log')->with('msg','Invalid details');
  }
  function admin_logout(Request $req)
  {
   $req->session()->forget('loginad');
     return redirect('admin_log')->with('logout','You have successfully logged out');
  }

  function admin_edit($id)
  {
    $user=Db::table('tbl_admin')->where('id',$id)->first();
  //   echo "<pre>";
  // print_r($user);
    return view('adminpanel/admin_profile',['user'=>$user]);
  }

  function new_admin(Request $req)
  {
    $name=$req->name;
    $email=$req->email;
    $username=$req->username;
    $password=$req->password;
    $mobile=$req->mobile;

    $profile="PHOTO".time().".".$req->image->extension();
    $req->image->move(public_path('photo'),$profile);

    Db::table('tbl_admin')->insert([
            'name'=>$name,
            'email'=>$email,
            'username'=>$username,
            'password'=>$password,
            'mobile'=>$mobile,
            'image'=>$profile,
          ]);
          return redirect('cnt')->with('add','You have successfully add a new admin..');
   
  }

  function adminedit(Request $req)
  {
    $image=$req->imagen;
    if(!empty($image))
    {
      $profile="PHOTO".time().".".$req->imagen->extension();
      $req->imagen->move(public_path('photo'),$profile);
      $id=$req->id;
      $name=$req->name;
      $username=$req->username;
      $email=$req->email;
      $password=$req->password;
      $mobile=$req->mobile;

      Db::table('tbl_admin')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'name'=>$name,
                              'username'=>$username,
                              'email'=>$email,
                              'password'=>$password,
                              'mobile'=>$mobile,
                              'image'=>$profile,
                            ]);
      return redirect('cnt')->with('update','Data updated successfully');
    }
    else{
      $id=$req->id;
      $name=$req->name;
      $username=$req->username;
      $email=$req->email;
      $password=$req->password;
      $mobile=$req->mobile; 

      Db::table('tbl_admin')->where('id',$id)
                            ->limit(1)
                            ->update([
                              'name'=>$name,
                              'username'=>$username,
                              'email'=>$email,
                              'password'=>$password,
                              'mobile'=>$mobile,
                            ]);
      return redirect('cnt')->with('update','Data updated successfully');
    }
  } 


/* Admin profile operation end */


/*  Admin panel option listing start*/


 function user_listing()
 {
  $user=Db::table('tbl_users')->get();
  return view('adminpanel/user_list',['user'=>$user]);
 }


 function total_book_listing()
 {
  $user=Db::table('tbl_booking')
              ->leftJoin('tbl_users','tbl_booking.email','=','tbl_users.email')
              ->select('tbl_users.*','tbl_booking.*')
              ->get();

  // echo "<pre>";
  // print_r($user);

  return view('adminpanel/total_booking_list',['user'=>$user]);
 }


 function selc_book_listing($email)
 {
  $user=Db::table('tbl_booking')
              ->leftJoin('tbl_users','tbl_booking.email','=','tbl_users.email')
              ->select('tbl_booking.*','tbl_users.*')
              ->where('tbl_booking.email','=',$email)
              ->get();

  // echo "<pre>";
  // print_r($user);

  return view('adminpanel/total_booking_list',['user'=>$user]);
 }


 function new_book_listing()
 {
  $user=Db::table('tbl_booking')
        ->leftJoin('tbl_users','tbl_booking.email','=','tbl_users.email')
        ->select('tbl_booking.*','tbl_users.*')
        ->where('tbl_booking.status','=','3')
        ->get();
  return view('adminpanel/total_booking_list',['user'=>$user]);
 }


 function confirm_listing()
 {
  $user=Db::table('tbl_booking')
        ->leftJoin('tbl_users','tbl_booking.email','=','tbl_users.email')
        ->select('tbl_booking.*','tbl_users.*')
        ->where('tbl_booking.status','=','1')
        ->get();
  return view('adminpanel/total_booking_list',['user'=>$user]);
 }


 function cancel_listing()
 {
  $user=Db::table('tbl_booking')
        ->leftJoin('tbl_users','tbl_booking.email','=','tbl_users.email')
        ->select('tbl_booking.*','tbl_users.*')
        ->where('tbl_booking.status','=','2')
        ->get();
  return view('adminpanel/total_booking_list',['user'=>$user]);
 }


 function issue_listing()
 {
  $user=Db::table('tbl_issue')
              ->leftJoin('tbl_users','tbl_issue.email','=','tbl_users.email')
              ->select('tbl_users.*','tbl_issue.*')
              ->get();

  return view('adminpanel/issue_list',['user'=>$user]);
 }


 function enquery_listing(Request $req)
   {
     $user=Db::table('tbl_query')->get();
     return view('adminpanel/enquery_list',['user'=>$user]);
   }



   function read_enquery_listing(Request $req)
   {
     $user=Db::table('tbl_query')->where('status','=','2')->get();
     return view('adminpanel/enquery_list',['user'=>$user]);
   }


   function new_enquery_listing(Request $req)
   {
     $user=Db::table('tbl_query')->where('status','=','3')->get();
     return view('adminpanel/enquery_list',['user'=>$user]);
   }

/*  Admin panel option view listing   end*/

/*  Booking confirm and cancel operatio by admin   */

function cancel_booking($id)
{
   DB::table('tbl_booking')
              ->where('id',$id)
              ->limit(1)
              ->update([
                'status'=>"2",
                'cancelby'=>"a",
              ]);
   return $this->total_book_listing();
}
function confirm_booking($id)
{
  DB::table('tbl_booking')
  ->where('id',$id)
  ->limit(1)
  ->update([
    'status'=>"1",
  ]);
return redirect('total_book_listing'); 
}


/* Issue reply   */
function issue_reply($id)
{
  
  $res=Db::table('tbl_issue')
        ->where('id',$id)->first();
  return view('adminpanel/admin_reply',['res'=>$res]);
}
function isuue_send(Request $req)
{
  $id=$req->id;
  $reply=$req->reply;

  Db::table('tbl_issue')->where('id',$id)
                        ->limit(1)
                        ->update([
                          'admin_remark'=>$reply,
                        ]);
  return redirect('issue_listing')->with('reply','Reply send successfully');

}
function read_enquery($id)
{
  // $email=$req->email;
  $res=Db::table('tbl_query')
                ->where('id',$id)
                ->limit(1)
                ->update([
                  'status'=>"2"
                ]);
        
        
    return  redirect('enquery_listing');

}

  /* sliders function */
    function sliders_savedata(Request $req)
    {
        $tbl=new SliderModel;
       $profile="PHOTO".time().".".$req->file1->extension();
       $req->file1->move(public_path('photo'),$profile);
      
        $tbl->header=$req->header;
        $tbl->image=$profile;
       
    
          $tbl->save();
          return redirect('sliders-add')->with('success','Inserted Successfully');
    }

    function sliders_listdata()
    {
      $users=SliderModel::get();
      return view('adminpanel/sliders_list',['users'=>$users]);
    }

    function sliders_editdata($id)
    {
      $users=SliderModel::where('id',$id)->first(); 
      return view('adminpanel/sliders_edit',['users'=>$users]);
    }

    function sliders_deletedata($id)
    {
      $user=DB::table('tbl_sliders')->where('id',$id)->delete();
    return redirect('sliders_listdata')->with('delete','Data deleted successfully');
    }

    function sliders_updatedata(Request $req)
   {
      $image=$req->image;
      if(!empty($image))
      {
        $profile="PHOTO".time().".".$req->image->extension();
        $req->image->move(public_path('photo'),$profile);
        $header=$req->header;
        $id=$req->id;

        Db::table('tbl_sliders')->where('id',$id)
                              ->limit(1)
                              ->update([
                                'header'=>$header,
                                'image'=>$profile,
                              ]);
        
        return redirect('sliders_listdata')->with('update','Data updated successfully');
      }
      else 
      {
        $header=$req->header;
        $id=$req->id;

        Db::table('tbl_sliders')->where('id',$id)
                              ->limit(1)
                              ->update([
                                'header'=>$header,
                              ]);
        return redirect('sliders_listdata')->with('update','Data updated successfully');
      }
  }

   
   
/* sliders function end*/

}

