<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeesController extends Controller
{
    public function index(){
        $data['employeesdata'] = [
            'name'=> 'Aung Ko Ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'0928387438'
        ];

        // dd(
        //     $data
        // );

        return view('employees/index',$data);

    }


    public function show(){
        $data['employeesdata'] = [
          
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmailcom',
            'phone'=>'09273838'
        ];

        return view('employees/show',$data);

    }


    public function passingdataone(){
        $fullname = "Honey Nway Oo";
        $city = "Mandalay";

        return view('employees/dataone',['fullname'=>$fullname,'city'=>$city]);
    }


    
}
