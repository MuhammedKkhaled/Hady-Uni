<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\patents;

class PatentsController extends Controller
{
    public function show()
    {
        $patents = patents::all()->reverse();

        return view('frontend.pages.Patents' , compact('patents'));
    }
    
    public function showStudy()
    {
        $depratments = Department::all();
        return view('frontend.pages.StudyinIraq', compact('depratments'));
    }
    public function showReview()
    {
        $depratments = Department::all();
        return view('frontend.pages.Review', compact('depratments'));
    }
    public function showReviewTow()
    {
        $depratments = Department::all();
        return view('frontend.pages.Review-tow', compact('depratments'));
    }
}
