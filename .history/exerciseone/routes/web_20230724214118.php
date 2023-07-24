<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\staffsController;
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


Route::get('/', function () {
    return "Save Myanmar";
});


Route::get('/sayar', function () {
    return 'Hey,Sayar Nay Kaung Lr??';
});



Route::get('/sayar/index', function () {
    return 'Hey,Sayar Nay Kaung Lr??';
});


// Route::get('redirect',function(){
//      return redirect("sayar");
// });


Route::redirect('redirect', 'sayar/index');


Route::get('/about/company', function () {
    return view('aboutcompany');
});

// Or 

Route::view('about/company', 'aboutcompany');




// Route::get("/",function(){
//    return view("aboutme");
// });



Route::get('about/company/{staff}', function ($staff) {
    return view('aboutcompanystaff', ['sf' => $staff]);
});

Route::get('about/company/{staff}/{city}', function ($staff, $city) {
    return view('aboutcompanystaffbycity', ['sf' => $staff, 'ct' => $city]);
});




Route::get('profile', function () {
    return view('profileme');
})->name('myprofiles');



Route::get('about/company/aungaung/mauabin', function ($staff, $city) {
    return view('aboutcompanystaffbycity', ['sf' => $staff, 'ct' => $city]);
})->name('companystaff');


// -----------------------------------------

// Controller 

// Route::get('students',[App\Http\Controllers\studentsController::class,'index'])->name('studentidx');
// Route::get('students/show',[App\Http\Controllers\studentsController::class,'show'])->name('stdshow');
// Route::get('students/edit',[App\Http\Controllers\studentsController::class,'edit'])->name('editpage');

Route::group(['prefix' => 'students'], function () {
    Route::get('index', [App\Http\Controllers\studentsController::class, 'index'])->name('studentidx');
    Route::get('show', [App\Http\Controllers\studentsController::class, 'show'])->name('stdshow');
    Route::get('edit', [App\Http\Controllers\studentsController::class, 'edit'])->name('editpage');
});


// Route::prefix('students')->group(function(){
//     Route::get('index', [App\Http\Controllers\studentsController::class, 'index'])->name('studentidx');
//     Route::get('show', [App\Http\Controllers\studentsController::class, 'show'])->name('stdshow');
//     Route::get('edit', [App\Http\Controllers\studentsController::class, 'edit'])->name('editpage');
// });




Route::get('staffs/home', [staffsController::class, 'homemethod'])->name('home');

Route::get('staffsparty', [staffsController::class, 'party'])->name('party');
Route::get('staffsparty/total', [staffsController::class, 'total'])->name('total');
Route::get('staffsparty/comfirm', [staffsController::class, 'totalcomfirm'])->name('comfirm');

Route::get('employees', [employeesController::class, 'index'])->name('employeesdata');
Route::get('employees/show', [employeesController::class, 'index'])->name('showindex');
Route::get('employees/show', [employeesController::class, 'show'])->name('show');
Route::get('employees/passingdataone', [employeesController::class, 'passingdataone'])->name('dataone');
