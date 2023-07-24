<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffsController extends Controller
{
    public function homemethod()
    {
        return view('staffs.home');
    }

    public function party()
    {
        return view('staffs/party');
    }

    public function total()
    {
        
       return view('staffs/partytotal');
    }

    public function totalcomfirm(){
        $total = 30000;
        $status = "checked";
        return view('staffs/partytotalcomfirm' , ['total'=>$total,'status'=>$status]);
    }
}