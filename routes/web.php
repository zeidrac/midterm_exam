<?php

use App\Http\Controllers\FeatureController;

Route::get('/midterm_exam', [FeatureController::class, 'index']);
