<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Gallery;
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

        $gallery = Gallery::where('department_id', $id)->first();

        return view("frontend.pages.department_details", compact('department', 'department_students', 'link', 'gallery'));
    }
}
