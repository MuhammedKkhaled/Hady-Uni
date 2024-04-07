<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function show()
    {
        $libraries = Library::all()->reverse();

        return view('frontend.pages.Research' , compact('libraries'));
    }
}
