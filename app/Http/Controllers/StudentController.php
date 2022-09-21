<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

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
    public function delete(int $student_id)
    {
        Student::deleteDB($student_id);
        return redirect('/student'); 
    }
    // public function show($student_id)
    // {
    //     # code...
    // }
}
