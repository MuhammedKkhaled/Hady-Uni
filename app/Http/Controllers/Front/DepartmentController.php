<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Gallery;
use App\Models\Ads;
use App\Models\Accreditation;
use App\Models\Link;
use App\Models\Student;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show($id)
    {

        $department =  Department::findOrFail($id);

        $department_students = Student::where('department_id', $id)->get();

        $link = Link::where('department_id', $id)->first();

        $galleries = Gallery::where('department_id', $id)->get();
        $accreditations = Accreditation::where('department_id', $id)->get();
        $ads = Ads::where('department_id', $id)->get();

        return view("frontend.pages.department_details", compact('department', 'department_students', 'link', 'galleries','accreditations','ads'));
    }
}
