<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentsController extends Controller
{
  public function index(){
   $indexname = "Home";

   return view('students/index',['fs'=>$indexname]);

  }


  public function show(){
    return view('students/show');
  }

  
}
