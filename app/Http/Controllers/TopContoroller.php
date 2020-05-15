<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;
use App\User;
use App\Virus;

class TopContoroller extends Controller
{
  public function index(Request $request)
  {
    $value=$request->get("test1");
    $value2=$request->get("test2");
    $value3=$request->get("test3");
    $value4=$request->get("test4");
    $value5=$request->get("test5");
    $value6=$request->get("test6");
    $value7=$request->get("test7");
    $user=User::find(1);
    dd($request->method);
    if ($request->method == "POST"){

      $virus = new Virus();
      $value=$request->get("test1");
      $virus->name= $value;
      $virus->save();
    }



    return view('welcome',compact("user","value","value2","value3","value4"));
  }
  public function post(Request $request)
  {
    $value=$request->get("test1");
    $value2=$request->get("test2");
    $value3=$request->get("test3");
    $value4=$request->get("test4");
    $value5=$request->get("test5");
    $value6=$request->get("test6");
    $value7=$request->get("test7");
    $user=User::find(1);
    $virus = new Virus();
    $value=$request->get("test1");
    $virus->name= $value;
    $virus->save();




    return view('welcome',compact("user","value","value2","value3","value4"));
  }





  public function graph()
  {

    return view('graph');
  }
}
