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
}