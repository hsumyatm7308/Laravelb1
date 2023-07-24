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
        $total = 200;
       return view('staffs/partytotal',['total'=>$total]);
    }

    public function totalcomfirm($total,$status){
        $status = "shin P";
        return view('staffs/partytotalcomfirm',['total'=>$total,'status'=>$status]);
    }
}