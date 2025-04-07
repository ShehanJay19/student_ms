<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;

class WelcomeController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalCourses = Course::count();
        $totalTeachers = Teacher::count();

        return view('welcome', compact('totalStudents', 'totalCourses', 'totalTeachers'));
    }
}
