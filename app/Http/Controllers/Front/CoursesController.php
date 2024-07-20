<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function show()
    {
        $courses = Course::all()->reverse();

        return view('frontend.pages.courses' , compact('courses'));
    }
}
