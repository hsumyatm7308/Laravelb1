<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',function(){
     return "Save Myanmar";
});


Route::get('/sayar',function(){
    return 'Hey,Sayar Nay Kaung Lr??';
});



Route::get('/sayar/index',function(){
    return 'Hey,Sayar Nay Kaung Lr??';
});


// Route::get('redirect',function(){
//      return redirect("sayar");
// });


Route::redirect('redirect','sayar/index');


Route::get('/about/company', function () {
    return view('aboutcompany');
});

// Or 

Route::view('about/company','aboutcompany');




// Route::get("/",function(){
//    return view("aboutme");
// });



Route::get('about/company/{staff}',function($staff){
    return view('aboutcompanystaff',[$sf->staff]);
});
