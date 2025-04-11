<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
 public function index()
 {
    $students = Student::all();
    return view('students.index', compact('students'));
 }
 public function show($student_id)
    {
        $student = Student::findOrFail($student_id); // Fetch the student by ID
        return view('students.studentInfo', compact('student'));
    }
}
