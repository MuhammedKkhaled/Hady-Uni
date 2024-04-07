<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Gallery;
use App\Models\Ads;
use App\Models\Accreditation;
use App\Models\Link;
use App\Models\Student;
use App\Models\Sustainable;
use App\Models\SustainablesGallery;
use Illuminate\Http\Request;

class SustainableController extends Controller
{
    public function show($id)
    {

        $sustainable =  Sustainable::findOrFail($id);
        $galleries = SustainablesGallery::where('department_id', $id)->get();

        return view("frontend.pages.onesustainable", compact('sustainable','galleries'));
    }
}
