<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
 {
    $teachers = Teacher::all();
    return view('teachers.index', compact('teachers'));
 }
 public function show($teacher_id)
 {
     $teacher = Teacher::findOrFail($teacher_id); // Fetch the student by ID
     return view('teachers.teacherInfo', compact('teacher'));
 }
}
