<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        
        // $students = Student::all()->toArray();
        // $students = Student::getByFaculty(1)->toArray();
        // var_dump($students);
        // return view('student.show',compact('student'));
    }



    // public function create()
    // {
        
    // }
    // public function update($student_id)
    // {
    //     # code...
    // }
    // public function delete($student_id)
    // {
    //     # code...
    // }
    // public function show($student_id)
    // {
    //     # code...
    // }
}
