<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {

        // Create a new student
        // $student = new Student();

        // $student->name = 'Mst. Binu';
        // $student->email = 'binu@example.com';
        // $student->class = 'Six';
        // $student->roll = '2';

        // $student->save();

        // Update a student
        // $exist_student = Student::find(3);

        // $exist_student-> name = 'Ariba Binte Arif';
        // $exist_student->email = 'ariba@example.com';
        // $exist_student->roll = '3';

        // $exist_student->update();


        // Delete a student
        $exist_student = Student::find(1);

        $exist_student->delete();

      return redirect()->route('show_student');

    }

    public function show() {
        $students = Student::get();

        return view('show-student', compact('students'));
    }
}
