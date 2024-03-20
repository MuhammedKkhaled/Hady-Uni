<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\PropertyStoreRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\News;
use App\Models\Property;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_properties')->only(['index']);
        $this->middleware('permission:create_properties')->only(['create', 'store']);
        $this->middleware('permission:update_properties')->only(['edit', 'update']);
        $this->middleware('permission:delete_properties')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.properties.index');

    }// end of index

    public function data()
    {
        $properties = Property::get();

        return DataTables::of($properties)

            ->addColumn('record_select', 'admin.properties.data_table.record_select')
           ->editColumn('teacher_id' , function (Property $property){
                return $property->teacher->{ 'name_'.LaravelLocalization::getCurrentLocale()} ;
           })
            ->editColumn('created_at', function (Property $property) {
                return $property->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.properties.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $teachers = Teacher::all();

        return view('admin.properties.create' , compact('teachers'));
    }// end of create

    public function store(PropertyStoreRequest $request)
    {

        $requestData = $request->validated();

        Property::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.properties.index');

    }// end of store

    public function edit(Property $property)
    {
        $teachers =  Teacher::all();
        return view('admin.properties.edit', compact('property' , 'teachers'));

    }// end of edit

    public function update(PropertyStoreRequest $request, Property $property)
    {
        $requestData = $request->validated();

        $property->update($requestData);

        session()->flash('success', __('custom.Update Successfully'));

        return redirect()->route('admin.properties.index');

    }// end of update

    public function destroy(Property $property)
    {
        $this->delete($property);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $property = Property::FindOrFail($recordId);
            $this->delete($property);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Property $property)
    {
        $property->delete();

    }// end of delete

}//end of controller
