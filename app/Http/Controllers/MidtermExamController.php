<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MidtermExam;

class MidtermExamController extends Controller
{
    public function index()
    {
        $exams = MidtermExam::all(); // Fetch all records
        return view('midterm_exam', compact('exams'));
    }
}
    