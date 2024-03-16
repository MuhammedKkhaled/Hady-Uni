<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show($id)
    {
        $department =  Department::findOrFail($id) ;
        return view("frontend.pages.department_details" ,compact('department'));
    }
}
