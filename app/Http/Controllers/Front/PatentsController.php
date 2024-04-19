<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\patents;

class PatentsController extends Controller
{
    public function show()
    {
        $patents = patents::all()->reverse();

        return view('frontend.pages.Patents' , compact('patents'));
    }
}
