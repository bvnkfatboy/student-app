<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::resource('student', StudentController::class);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::resource('students' , StudentController::class);
Route::get('/', function () {
    return view('demo');
});

Route::get('/student',
    [StudentController::class,'index']
);
Route::get('/student/create',
    [StudentController::class,'create']
);
Route::get('/student/delete/{student_id}',
    [StudentController::class,'delete']
);
Route::post('/student/store',
    [StudentController::class,'store']
);

Route::get('/teacher/form', function () {
    return view('teacher.form');
});
