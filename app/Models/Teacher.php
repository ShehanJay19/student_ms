<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'contact_number', 'teacher_image'];
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
}
