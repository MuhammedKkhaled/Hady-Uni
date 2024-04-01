<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\LinkRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\StudentRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\Link;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_links')->only(['index']);
        $this->middleware('permission:create_links')->only(['create', 'store']);
        $this->middleware('permission:update_links')->only(['edit', 'update']);
        $this->middleware('permission:delete_links')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.links.index');

    }// end of index

    public function data()
    {
        $link = Link::get();

        return DataTables::of($link)

            ->addColumn('record_select', 'admin.links.data_table.record_select')
            ->editColumn('department_id' ,function (Link $link){
                return $link->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Link $link) {
                return $link->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.links.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.links.create' , compact('depratments'));
    }// end of create

    public function store(LinkRequest $request)
    {
        $requestData = $request->validated();

        if ($request->program_desc_file) {

            $request->program_desc_file->store('public/uploads/links/');
            $request->study_plan_file->store('public/uploads/links/');
            $request->course_study_file->store('public/uploads/links/');
            $request->university_calender_file->store('public/uploads/links/');
            $request->exam_table_file->store('public/uploads/links/');
            $request->school_schedule_file->store('public/uploads/links/');


            $requestData['program_desc_file'] = $request->program_desc_file->hashName();

            $requestData['study_plan_file'] = $request->study_plan_file->hashName();

            $requestData['course_study_file'] = $request->course_study_file->hashName();

            $requestData['university_calender_file'] = $request->university_calender_file->hashName();

            $requestData['exam_table_file'] = $request->exam_table_file->hashName();

            $requestData['school_schedule_file'] = $request->school_schedule_file->hashName();
        }

        Link::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.links.index');

    }// end of store

    public function edit(Link $link)
    {

       $departments=  Department::all();
        return view('admin.links.edit', compact('link' , 'departments'));

    }// end of edit

    public function update(LinkRequest $request, Link $link)
    {

        $requestData = $request->validated();

        if ($request->program_desc_file) {

            Storage::disk('local')->delete('public/uploads/links/' . $link->program_desc_file);
            Storage::disk('local')->delete('public/uploads/links/' . $link->study_plan_file);
            Storage::disk('local')->delete('public/uploads/links/' . $link->course_study_file);
            Storage::disk('local')->delete('public/uploads/links/' . $link->university_calender_file);
            Storage::disk('local')->delete('public/uploads/links/' . $link->exam_table_file);
            Storage::disk('local')->delete('public/uploads/links/' . $link->school_schedule_file);


            $request->program_desc_file->store('public/uploads/links/');
            $request->study_plan_file->store('public/uploads/links/');
            $request->course_study_file->store('public/uploads/links/');
            $request->university_calender_file->store('public/uploads/links/');
            $request->exam_table_file->store('public/uploads/links/');
            $request->school_schedule_file->store('public/uploads/links/');


            $requestData['program_desc_file'] = $request->program_desc_file->hashName();
            $requestData['study_plan_file'] = $request->study_plan_file->hashName();
            $requestData['course_study_file'] = $request->course_study_file->hashName();
            $requestData['university_calender_file'] = $request->university_calender_file->hashName();
            $requestData['exam_table_file'] = $request->exam_table_file->hashName();
            $requestData['school_schedule_file'] = $request->school_schedule_file->hashName();
        }

        $link->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.links.index');

    }// end of update

    public function destroy(Link $link)
    {
        $this->delete($link);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $link = Link::FindOrFail($recordId);
            $this->delete($link);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Link $link)
    {
        Storage::disk('local')->delete('public/uploads/links/' . $link->program_desc_file);
        Storage::disk('local')->delete('public/uploads/links/' . $link->study_plan_file);
        Storage::disk('local')->delete('public/uploads/links/' . $link->course_study_file);
        Storage::disk('local')->delete('public/uploads/links/' . $link->university_calender_file);
        Storage::disk('local')->delete('public/uploads/links/' . $link->exam_table_file);
        Storage::disk('local')->delete('public/uploads/links/' . $link->school_schedule_file);

        $link->delete();

    }// end of delete

}//end of controller
