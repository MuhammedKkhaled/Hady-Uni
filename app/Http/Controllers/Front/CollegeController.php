<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\College;
use App\Models\Sustainable;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function show()
    {
        $libraries = College::all()->reverse();

        return view('frontend.pages.College' ,compact('libraries'));

    }
    
}
