<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\News;
use App\Models\Teacher;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_teachers')->only(['index']);
        $this->middleware('permission:create_teachers')->only(['create', 'store']);
        $this->middleware('permission:update_teachers')->only(['edit', 'update']);
        $this->middleware('permission:delete_teachers')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.teachers.index');

    }// end of index

    public function data()
    {
        $teachers = Teacher::get();

        return DataTables::of($teachers)

            ->addColumn('record_select', 'admin.teachers.data_table.record_select')
            ->addColumn('image', function (Teacher $teacher) {
                return view('admin.teachers.data_table.image', compact('teacher'));
            })
            ->editColumn('created_at', function (Teacher $teacher) {
                return $teacher->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.teachers.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {

        $types = [
            0 => 'العميد',
            1 => 'السيرة الذاتية لمعاون العميد للشؤون المالية و الادارية',
            2 => 'السيرة الذاتية لمعاون العميد للشؤون العلمية',
            3 => 'الشعبة الادارية',
            4 => 'الشعبة الحسابات',
            5 => 'الشعبة القانونية',
            6 => 'الشعبة التسجيل',
            7 => 'الشعبة التقويم',
            8 => 'الشعبة المعلومات الالكترونية',
        ];

        return view('admin.teachers.create' , compact('types'));
    }// end of create

    public function store(TeacherStoreRequest $request)
    {


        $requestData = $request->validated();

        if ($request->image) {
            $request->image->store('public/uploads/teachers/');
            $requestData['image'] = $request->image->hashName();
        }

        Teacher::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.teachers.index');

    }// end of store

    public function edit(Teacher $teacher)
    {
        $types = [
            0 => 'العميد',
            1 => 'السيرة الذاتية لمعاون العميد للشؤون المالية و الادارية',
            2 => 'السيرة الذاتية لمعاون العميد للشؤون العلمية',
            3 => 'الشعبة الادارية',
            4 => 'الشعبة الحسابات',
            5 => 'الشعبة القانونية',
            6 => 'الشعبة التسجيل',
            7 => 'الشعبة التقويم',
            8 => 'الشعبة المعلومات الالكترونية',
        ];

        return view('admin.teachers.edit', compact('teacher' , 'types'));

    }// end of edit

    public function update(TeacherUpdateRequest $request, Teacher $teacher)
    {

        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/teachers/' . $teacher->image);
            $request->image->store('public/uploads/teachers/');
            $requestData['image'] = $request->image->hashName();
        }

        $teacher->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.teachers.index');

    }// end of update

    public function destroy(Teacher $teacher)
    {
        $this->delete($teacher);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $teacher = Teacher::FindOrFail($recordId);
            $this->delete($teacher);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Teacher $teacher)
    {
        Storage::disk('local')->delete('public/uploads/teachers/' . $teacher->image);
        $teacher->delete();

    }// end of delete

}//end of controller
