<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['student_id','name','contact_number','student_image'];
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
