<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\CourseRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\Course;
use App\Models\News;
use App\Models\Specification;
use App\Models\Teacher;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_courses')->only(['index']);
        $this->middleware('permission:create_courses')->only(['create', 'store']);
        $this->middleware('permission:update_courses')->only(['edit', 'update']);
        $this->middleware('permission:delete_courses')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.courses.index');

    }// end of index

    public function data()
    {
        $Courses = Course::get();

        return DataTables::of($Courses)

            ->addColumn('record_select', 'admin.courses.data_table.record_select')
           
            ->editColumn('name_'. LaravelLocalization::getCurrentLocale(), function (Course $Courses) {
                return $Courses->{"name_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->editColumn('lecturers_'. LaravelLocalization::getCurrentLocale(), function (Course $Courses) {
                return $Courses->{"lecturers_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->editColumn('created_at', function (Course $course) {
                return $course->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.courses.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.courses.create');
    }// end of create

    public function store(CourseRequest $request)
    {
        $requestData = $request->validated();

        Course::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.courses.index');

    }// end of store

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));

    }// end of edit

    public function update(CourseRequest $request, Course $course)
    {
        $requestData = $request->validated();
        $course->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.courses.index');

    }// end of update

    public function destroy(Course $course)
    {
        $this->delete($course);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $course = Course::FindOrFail($recordId);
            $this->delete($course);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Course $course)
    {
        $course->delete();

    }// end of delete

}//end of controller
