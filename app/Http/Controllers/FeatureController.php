<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('midterm_exam', ['features' => $features]);
    }
}
