<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopRequest;
use App\Models\Top;
use App\Models\AllStudent;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function show(TopRequest $request)
    {
        $year = $request->year;
        $tops = Top::where('department_id', $request->department_id)->whereYear('year', $request->year)->orderBy('ranking', 'ASC')->get();
        return view('frontend.pages.tops',compact('tops','year'));
    }
    public function showtow(TopRequest $request)
    {
        $year = $request->year;
        $students = AllStudent::where('department_id', $request->department_id)->whereYear('year', $request->year)->orderBy('ranking', 'ASC')->get();
        return view('frontend.pages.all-student',compact('students','year'));
    }
}
