<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\LibraryRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\Library;
use App\Models\News;
use App\Models\Specification;
use App\Models\Teacher;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LibraryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_libraries')->only(['index']);
        $this->middleware('permission:create_libraries')->only(['create', 'store']);
        $this->middleware('permission:update_libraries')->only(['edit', 'update']);
        $this->middleware('permission:delete_libraries')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.libraries.index');

    }// end of index

    public function data()
    {
        $libraries = Library::get();

        return DataTables::of($libraries)

            ->addColumn('record_select', 'admin.libraries.data_table.record_select')
           
            ->editColumn('name_'. LaravelLocalization::getCurrentLocale(), function ( Library $libraries) {
                return $libraries->{"name_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->editColumn('published_at', function (Library $library) {
                return $library->published_at->format('Y');
            })
            ->addColumn('actions', 'admin.libraries.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $teachers =  Teacher::all();
        $affiliates =  Affiliate::all();
        return view('admin.libraries.create' , compact('teachers','affiliates'));
    }// end of create

    public function store(LibraryRequest $request)
    {

        $requestData = $request->validated();

        Library::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.libraries.index');

    }// end of store

    public function edit(Library $library)
    {
        $affiliates =  Affiliate::all();
        $teachers =  Teacher::all();
        return view('admin.libraries.edit', compact('library' ,'teachers','affiliates'));

    }// end of edit

    public function update(LibraryRequest $request, Library $library)
    {
        $requestData = $request->validated();
        if ($request->file) {
            Storage::disk('local')->delete('public/uploads/libraries/' . $library->file);
            $request->file->store('public/uploads/libraries/');
            $requestData['file'] = $request->file->hashName();
        }

        $library->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.libraries.index');

    }// end of update

    public function destroy(Library $library)
    {
        $this->delete($library);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $library = Library::FindOrFail($recordId);
            $this->delete($library);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Library $library)
    {
        Storage::disk('local')->delete('public/uploads/libraries/' . $library->file);
        $library->delete();

    }// end of delete

}//end of controller
