<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentsController extends Controller
{
  public function index(){
   $firstname = "HMM";

   return view('students/index',['fs'=>$firstname]);

  }

  
}
