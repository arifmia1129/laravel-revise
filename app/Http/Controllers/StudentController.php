<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        $student = new Student();

        $student->name = 'Mst. Binu';
        $student->email = 'binu@example.com';
        $student->class = 'Six';
        $student->roll = '2';

        $student->save();

      return redirect()->route('show_student');

    }

    public function show() {
        $students = Student::get();

        return view('show-student', compact('students'));
    }
}
