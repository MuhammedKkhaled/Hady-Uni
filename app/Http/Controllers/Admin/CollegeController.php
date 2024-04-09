<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\CollegeRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\College;
use App\Models\News;
use App\Models\Specification;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CollegeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_college')->only(['index']);
        $this->middleware('permission:create_college')->only(['create', 'store']);
        $this->middleware('permission:update_college')->only(['edit', 'update']);
        $this->middleware('permission:delete_college')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.college.index');

    }// end of index

    public function data()
    {
        $college = College::get();

        return DataTables::of($college)

            ->addColumn('record_select', 'admin.college.data_table.record_select')
           
            ->editColumn('book_name_'. LaravelLocalization::getCurrentLocale(), function ( College $college) {
                return $college->{"book_name_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->addColumn('actions', 'admin.college.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.college.create' , compact('depratments'));
    }// end of create

    public function store(CollegeRequest $request)
    {

        $requestData = $request->validated();

        College::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.college.index');

    }// end of store

    public function edit(College $college)
    {
        $depratments =  Department::all();
        return view('admin.college.edit', compact('college' , 'depratments'));

    }// end of edit

    public function update(CollegeRequest $request, College $college)
    {
        $requestData = $request->validated();
        if ($request->file) {
            Storage::disk('local')->delete('public/uploads/college/' . $college->file);
            $request->file->store('public/uploads/college/');
            $requestData['file'] = $request->file->hashName();
        }

        $college->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.college.index');

    }// end of update

    public function destroy(College $college)
    {
        $this->delete($college);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $college = College::FindOrFail($recordId);
            $this->delete($college);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(College $college)
    {
        Storage::disk('local')->delete('public/uploads/college/' . $college->file);
        $college->delete();

    }// end of delete

}//end of controller
