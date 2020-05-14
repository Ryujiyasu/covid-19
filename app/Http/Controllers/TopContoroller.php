<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;
use App\User;

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
    $user=User::where('id',1)->get();
    dd($user);

    return view('welcome',compact("user","value","value2","value3","value4"));
  }
  public function graph()
  {

    return view('graph');
  }
}
