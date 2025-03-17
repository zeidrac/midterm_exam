<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MidtermExam extends Model
{
    use HasFactory;

    protected $table = 'midterm_exam'; // Ensure correct table name

    protected $fillable = ['student_name', 'score'];
}
