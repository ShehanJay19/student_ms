<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    

    protected $fillable=['name','contact_number','student_image'];
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    protected $primaryKey = 'student_id'; // Specify the primary key column
}
