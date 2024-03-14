<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\StoreDepartmentRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Department;
use App\Models\News;
use App\Models\Specification;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_departments')->only(['index']);
        $this->middleware('permission:create_departments')->only(['create', 'store']);
        $this->middleware('permission:update_departments')->only(['edit', 'update']);
        $this->middleware('permission:delete_departments')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {

         return view('admin.departments.index');

    }// end of index

    public function data()
    {
        $departments = Department::get();

        return DataTables::of($departments)

            ->addColumn('record_select', 'admin.departments.data_table.record_select')
            ->addColumn('image', function (Department $department) {
                return view('admin.departments.data_table.image', compact('department'));

            })
            ->editColumn('created_at', function (Department $category) {
                return $category->created_at->format('Y-m-d');
            })

            ->addColumn('actions', 'admin.departments.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $specifications = Specification::all();

        return view('admin.departments.create' , compact('specifications'));

    }// end of create

    public function store(StoreDepartmentRequest $request)
    {

        $requestData = $request->validated();

        if ($request->image) {
            $request->image->store('public/uploads/departments/');
            $requestData['image'] = $request->image->hashName();
        }

        Department::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.departments.index');

    }// end of store

    public function edit(Department $department)
    {
        $specifications = Specification::all();
        return view('admin.departments.edit', compact('department' , 'specifications'));

    }// end of edit

    public function update(StoreDepartmentRequest $request, Department $department)
    {
        $requestData = $request->validated();

        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/departments/' . $department->image);
            $request->image->store('public/uploads/departments/');
            $requestData['image'] = $request->image->hashName();
        }

        $department->update($requestData);

        session()->flash('success', __('Update Successfully'));

        return redirect()->route('admin.departments.index');

    }// end of update

    public function destroy(Department $departments)
    {
        $this->delete($departments);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $departments = Department::FindOrFail($recordId);
            $this->delete($departments);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Department $departments)
    {
        Storage::disk('local')->delete('public/uploads/departments/' . $departments->image);
        $departments->delete();

    }// end of delete

}//end of controller
