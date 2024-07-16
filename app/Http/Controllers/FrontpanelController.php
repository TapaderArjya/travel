<?php

namespace App\Http\Controllers;
use App\Models\SliderModel;
use App\Models\packageModel;
use App\Models\RegistrationModel;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class FrontpanelController extends Controller
{
   function getdata(Request $req)
   {
      $users=DB::table('tbl_package')->get();
      return view('frontpanel/package',['users'=>$users]);
   }

   function packageinfo($id)
    {
      $users=DB::table('tbl_package')->where('id', $id)->get();
      return view('frontpanel/packagedetails',['users'=>$users]);
    }

    function bookingdetails($id)
    {
      $users=packageModel::where('id',$id)->get();
    return view('frontpanel/booking',['users'=>$users]);
    }
    function user_registration(Request $req)
    {
      $tbl=new RegistrationModel;

       $name=$req->name;
       $email=$req->email;
       $mobile=$req->mobile;
       $password=$req->password;
      
      Db::table('tbl_users')->insert([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'mobile'=>$mobile,
      ]);

         return redirect('register')->with('reg','You have registered Successfully');
    }
    function sing_in(Request $req)
    {
      $email=$req->email;
      $password=$req->password;

      $records=RegistrationModel::where('email',$email)->where('password',$password)->get();

      // echo "<pre>";
      // print_r($records);

      if($records->isNotEmpty())
      {
        $req->session()->put('login',$records[0]);
        return redirect('home');
      }
      else
        return redirect('home')->with('fail','Invalid Password Or Email');
    
        }

    function logout(Request $req)
    {
      $req->session()->forget('login');
      return redirect('home')->with('logout','You have successfully logged out');
    }
    
    function user_edit($id)
    {
      $users=RegistrationModel::where('id',$id)->first();
      return view('frontpanel/useredit',['users'=>$users]);
    }
    function user_update(Request $req)
    {
      RegistrationModel::whereId($req->id)->update($req->except('_token','_method'));
      return redirect('home')->with('update','Data updated successfully');
    }
    function raised_issue($email)
    {
      $users=Db::table('tbl_issue')
            ->where('email',$email)
            ->get();
      return view('frontpanel/my_issue',['users'=>$users]);
    }

    function edit_pwd($id)
    {
      $users=RegistrationModel::where('id',$id)->first();
      return view('frontpanel/change_password',['users'=>$users]);
    }
    function change_pwd(Request $req)
    {
      $pwd=$req->oldpassword;
      $newpwd=$req->confirmpassword;
      $results=DB::select(DB::raw("SELECT * FROM tbl_users WHERE password='$pwd'"));
      
      if(!empty($results))
      {
        DB::table('tbl_users')
              ->where('password',$pwd)
              ->limit(1)
              ->update(['password'=>$newpwd]);
      return redirect('change_password')->with('success','Password has been changed successfully');
      }
      else
      {
        return redirect('change_password')->with('fail','You put the wrong old password');
      }
    }




/*password change where the password is not remembered ny the user*/
    function edituser_password()
    {
      
      return view('frontpanel/change_password');
    }
    function changeuser_password(Request $req)
    {
      $email=$req->email;
      $mobile=$req->mobile;
      $newpwd=$req->confirmpassword;
      $results=DB::select(DB::raw("SELECT * FROM `tbl_users` WHERE email='$email' AND mobile='$mobile'"));
      
      if(!empty($results))
      {
        DB::table('tbl_users')
              ->where('email',$email)
              ->where('mobile',$mobile)
              ->limit(1)
              ->update(['password'=>$newpwd]);
      return redirect('change_password')->with('success','Password has been changed successfully');
      }
      else
      {
        return redirect('change_password')->with('fail','You put the wrong email or password');
      }
    }

    /* booking travel package */
    function bookdata(Request $req)
    {
      $packageid=$req->packid;
      $email=$req->useremail;
      $fromdate=$req->fromdate;
      $todate=$req->todate;
      $comment=$req->message;
      $package_name=$req->package_name;

      DB::table('tbl_booking')->insert(
        ['packageid' => $packageid,
        'package_name' => $package_name,
        'email' => $email,
        'fromdate' => $fromdate,
        'todate' => $todate,
        'comment' => $comment,
      ]);
      return redirect('home')->with('booked','Your Package has been successfully booked');
      }

      function user_tour($email)
      {
        $user=DB::table('tbl_booking')->where('email',$email)->get();
      //   echo "<pre>";
      // print_r($user);

        return view('frontpanel/tour_history',['users'=>$user]);
        }
        function cancel($id)
        {
          DB::table('tbl_booking')
              ->where('id',$id)
              ->limit(1)
              ->update([
                'status'=>"2",
                'cancelby'=>"u",
              ]);
          }

          function query(Request $req)
          {
            $name=$req->name;
            $email=$req->email;
            $mobile=$req->mobile;
            $subject=$req->subject;
            $description=$req->message;

            Db::table('tbl_query')->insert([
              'name'=>$name,
              'email'=>$email,
              'mobile'=>$mobile,
              'subject'=>$subject,
              'description'=>$description,
            ]);
            return redirect('contact')->with('query','Your query has been succfully submited.'); 

          }

          function user_issue(Request $req)
          {
            $email=$req->email;
            $issue=$req->issue;
            $comment=$req->comment;

            Db::table('tbl_issue')->insert([
              'email'=>$email,
              'issue'=>$issue,
              'description'=>$comment,
            ]);
            return redirect('home')->with('issues','Your issue has been succfully submited.'); 

          }

          function user_enquery(Request $req)
          {
            $name=$req->name;
            $email=$req->email;
            $mobile=$req->mobile;
            $subject=$req->subject;
            $comment=$req->comment;
            Db::table('tbl_query')->insert([
              'name'=>$name,
              'email'=>$email,
              'mobile'=>$mobile,
              'subject'=>$subject,
              'description'=>$comment,
            ]);
            return redirect('home')->with('enquery','Your enquery has been succfully submited.'); 

          }

          function testimonial_get()
          {
            $user=TestimonialModel::get();
            return view('frontpanel/testimonial',['users'=>$user]);
          }
}
