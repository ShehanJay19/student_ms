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
 public function create()
    {
        return view('students.register'); // Return the register view
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            
            'contact_number' => 'required|string|max:15',
            
            
        ]);

        // Create a new student record
        Student::create($validated);

        // Redirect to the students page with a success message
        return redirect('/students')->with('success', 'Student registered successfully!');
    }
}
