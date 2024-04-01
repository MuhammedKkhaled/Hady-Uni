<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\StudentRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class StudnetController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_students')->only(['index']);
        $this->middleware('permission:create_students')->only(['create', 'store']);
        $this->middleware('permission:update_students')->only(['edit', 'update']);
        $this->middleware('permission:delete_students')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.students.index');

    }// end of index

    public function data()
    {
        $student = Student::get();

        return DataTables::of($student)

            ->addColumn('record_select', 'admin.students.data_table.record_select')
            ->editColumn('department_id' ,function (Student $student){
                return $student->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            }) ->editColumn('year' ,function (Student $student){
                return $student->year->format("Y");
            })
            ->editColumn('created_at', function (Student $student) {
                return $student->created_at->format('Y');
            })
            ->addColumn('actions', 'admin.students.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.students.create' , compact('depratments'));
    }// end of create

    public function store(StudentRequest $request)
    {
        $requestData = $request->validated();

        if ($request->student_file) {
            $request->student_file->store('public/uploads/students/');
            $request->graduated_file->store('public/uploads/students/');
            $requestData['student_file'] = $request->student_file->hashName();
            $requestData['graduated_file'] = $request->graduated_file->hashName();
        }

        Student::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.students.index');

    }// end of store

    public function edit(Student $student)
    {

       $departments=  Department::all();
        return view('admin.students.edit', compact('student' , 'departments'));

    }// end of edit

    public function update(StudentRequest $request, Student $student)
    {

        $requestData = $request->validated();

        if ($request->student_file) {
            Storage::disk('local')->delete('public/uploads/students/' . $student->student_file);
            Storage::disk('local')->delete('public/uploads/students/' . $student->graduated_file);
            $request->student_file->store('public/uploads/students/');
            $request->graduated_file->store('public/uploads/students/');
            $requestData['student_file'] = $request->student_file->hashName();
            $requestData['graduated_file'] = $request->graduated_file->hashName();
        }

        $student->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.students.index');

    }// end of update

    public function destroy(Student $student)
    {
        $this->delete($student);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $student = Student::FindOrFail($recordId);
            $this->delete($student);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Student $student)
    {
        Storage::disk('local')->delete('public/uploads/students/' . $student->student_file);

        Storage::disk('local')->delete('public/uploads/students/' . $student->graduated_file);

        $student->delete();

    }// end of delete

}//end of controller