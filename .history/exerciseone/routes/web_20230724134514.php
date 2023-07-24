<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;

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
    return view('aboutcompanystaff',['sf' => $staff]);
});

Route::get('about/company/{staff}/{city}',function($staff,$city){
    return view('aboutcompanystaffbycity',['sf'=>$staff,'ct'=>$city]);
});




Route::get('profile',function(){
    return view('profileme');
})->name('myprofiles');



Route::get('about/company/aungaung/mauabin',function($staff,$city){
    return view('aboutcompanystaffbycity',['sf'=>$staff,'ct'=>$city]);
})->name('companystaff');


// -----------------------------------------

// Controller 

Route::get('students',[App\Http\Controllers\studentsController::class,'index'])->name('studentidx');
Route::get('students/show',[App\Http\Controllers\studentsController::class,'show'])->name('stdshow');

