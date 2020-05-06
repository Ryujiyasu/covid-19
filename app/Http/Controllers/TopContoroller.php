<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;

class TopContoroller extends Controller
{
  public function index()
  {

    return view('welcome');
  }
}
