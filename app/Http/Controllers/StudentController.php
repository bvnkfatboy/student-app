<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        
        // $students = Student::all()->toArray();
        $students = Student::all()->toArray();
        // var_dump($students);
        return view("student.index") -> with(
            compact([
                'students',
            ])
        );
    }



    public function create()
    {
        return view("student.create");
    }

    public function store(Request $request) {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'faculty' => 'required',
        ]);

        Student::insertDB($request->all());
            return redirect('/student');
    }
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
