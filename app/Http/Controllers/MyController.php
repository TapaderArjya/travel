<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MyController extends Controller
{
    function savedata(Request $req)
    {
      $req->validate([
        'name' => 'required',
        'email' => 'required|email',
        'datetime' => 'required',
        'destination' => 'required',
        'message' => 'required',
      ]);

        $tbl=new UserModel;
      
        $tbl->name=$req->name;
        $tbl->email=$req->email;
        $tbl->datetime=$req->datetime;
        $tbl->destination=$req->destination;
        $tbl->request=$req->message;
    
          $tbl->save();
          return redirect('home');
     
    }
     function querydata(Request $req)
     {
      $name=$req->name;
      $email=$req->email;
      $subject=$req->subject;
      $message=$req->message;

      DB::table('query_tbl')->insert(
        ['name' => $name,
        'email' => $email,
        'subject' => $subject,
        'query' => $message,
        ]
      );

      echo "inserted successfully";
     }

    
}
