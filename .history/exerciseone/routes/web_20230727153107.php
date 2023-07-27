<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\membersController;
use App\Http\Controllers\employeesController;
use App\Http\Controllers\staffsController;
use App\Http\Controllers\studentsController;
use Illuminate\Support\Facades\DB;
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
Route::get('employees/passingdatatwo', [employeesController::class, 'passingdatatwo'])->name('datatwo');
Route::get('employees/passingdatathree', [employeesController::class, 'passingdatathree'])->name('datathree');
Route::get('employees/passingdatafour', [employeesController::class, 'passingdatafour'])->name('datafour');
Route::get('/employees/edit', [employeesController::class, 'edit'])->name('employees.edit');
Route::get('/employees/update', [employeesController::class, 'update'])->name('employees.update');


Route::get('/dashboards', [dashboardController::class, 'index'])->name('dashboards.index');
Route::get('/members', [membersController::class, 'index'])->name('members.index');



// Data Insert from route 
// use Illuminate\Support\Facades\DB 
Route::get('types/insert',function(){
  DB::insert("INSERT INTO types(name) VALUES(?)",["book"]);
  return "Successfully Insert";
});

Route::get('books/insert',function(){
   DB::insert("INSERT INTO books(title) VALUES(?)",["This is title 1"]);
   return "Successfully Insert";
});


Route::get('books/update',function(){
    DB::insert("UPDATE books SET description='Lorem Ipsum is simply dummy text of the printing and typesetting industry.' WHERE id=?",['1']);
    return "Successfully update";
 });


 Route::get('books/insert',function(){
    DB::insert("INSERT INTO books(title,description) VALUES(?,?)",["This is title 10","Lorem Ipsum is simply dummy text of the printing and typesetting industry."]);
    return "Successfully Insert";
 });
 
 Route::get('shopper/update', function () {
    DB::update("UPDATE shopper SET fullname=?,phone=?,city=? WHERE id =?", ['kyaw kayw', '222222', 'bago']);
    return "Data Updated";

});

Route::get('shopper/delete', function () {
    DB::delete("DELETE FROM shopper WHERE id=?", [1]);
    return "Data Delete";

});



Route::get('books/read',function(){
    // $results = DB::select("SELECT * FROM books");
    // $results = DB::select("SELECT * FROM books WHERE id = 1");
    // $results = DB::select("SELECT title FROM books WHERE id = 1");

    // $results = DB::table('books')->get();
    // $results = DB::table('books')->select('title')->get();
    // $results = DB::table('books')->selectRaw('*')->get();


    // $results = DB::table('books')->select('title')->where('id',1)->get();
    // $results = DB::table('books')->selectRaw('*')->where('id',1)->get();

    // $results = DB::table('books')->select('title','description')->where('id',1)->get();
    // $results = DB::table('books')->selectRaw('title , description')->where('id',1)->get();

    // $results = DB::table('books')->select(DB::raw('*'))->where('id',1)->get();
    // $results = DB::table('books')->selectRaw(DB::raw('*'))->where('id',1)->get();  //not nessary DB:raw('*') because of calling all coumn
    // $results = DB::table('books')->selectRaw(DB::raw('title,description'))->where('id',1)->get();   // it's okay but  should use DB::raw() only when you need to include raw SQL expressions that cannot be handled directly by Laravel's Query Builder.

    // $results = DB::table('books')->select("count(*) AS titlename,title")->get();   // should use DB::raw() only when you need to include raw SQL expressions that cannot be handled directly by Laravel's Query Builder.
    // $results = DB::table('books')->selectRaw("count(*) AS titlename,title")->get();   // should use DB::raw() only when you need to include raw SQL expressions that cannot be handled directly by Laravel's Query Builder.


    // $results = DB::table('books')->selectRaw('count(*) AS titlename,title')->where('id',"<>",3)->groupBy('title')->get();  //It's okay because selectRaw knows expression 
    // $results = DB::table('books')->select('count(*) AS titlename,title')->where('id',"<>",3)->groupBy('title')->get(); // select doesn't know expression. It assumes a column 

    // $results = DB::table('books')->select(DB::raw('count(*) AS titlename,title'))->where('id',"<>",3)->groupBy('title')->get(); // select doesn't know expression. It assumes a column. So to know expression, It is used DB:raw()

    $rersults = DB::table('books')->first();






    return $results;
});
