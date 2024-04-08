<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\SustainableRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Sustainable;
use App\Models\News;
use App\Models\Specification;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class SustainableController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_sustainable')->only(['index']);
        $this->middleware('permission:create_sustainable')->only(['create', 'store']);
        $this->middleware('permission:update_sustainable')->only(['edit', 'update']);
        $this->middleware('permission:delete_sustainable')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {

         return view('admin.sustainable.index');

    }// end of index

    public function data()
    {
        $sustainable = Sustainable::get();

        return DataTables::of($sustainable)

            ->addColumn('record_select', 'admin.sustainable.data_table.record_select')
            ->addColumn('image', function (Sustainable $sustainable) {
                return view('admin.sustainable.data_table.image', compact('sustainable'));

            })
            ->editColumn('titel_'.LaravelLocalization::getCurrentLocale() ,function (Sustainable $sustainable){
                return $sustainable->{"titel_".LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Sustainable $category) {
                return $category->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.sustainable.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $specifications = Specification::all();

        return view('admin.sustainable.create' , compact('specifications'));

    }// end of create

    public function store(SustainableRequest $request)
    {

        $requestData = $request->validated();

        if ($request->image) {
            $request->image->store('public/uploads/sustainable/');
            $request->file->store('public/uploads/sustainable/');
            $requestData['image'] = $request->image->hashName();
            $requestData['file'] = $request->file->hashName();
        }

        Sustainable::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.sustainable.index');

    }// end of store

    public function edit(Sustainable $sustainable)
    {
        $specifications = Specification::all();
        return view('admin.sustainable.edit', compact('sustainable' , 'specifications'));

    }// end of edit

    public function update(SustainableRequest $request, Sustainable $sustainable)
    {
        $requestData = $request->validated();

        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/sustainable/' . $sustainable->image);
            Storage::disk('local')->delete('public/uploads/sustainable/' . $sustainable->file);
            $request->image->store('public/uploads/sustainable/');
            $request->file->store('public/uploads/sustainable/');
            $requestData['image'] = $request->image->hashName();
            $requestData['file'] = $request->file->hashName();
        }

        $sustainable->update($requestData);

        session()->flash('success', __('Update Successfully'));

        return redirect()->route('admin.sustainable.index');

    }// end of update

    public function destroy(Sustainable $sustainable)
    {

        $this->delete($sustainable);

        session()->flash('success', __('site.deleted_successfully'));

        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $sustainable = Sustainable::FindOrFail($recordId);
            $this->delete($sustainable);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Sustainable $sustainable)
    {

        Storage::disk('local')->delete('public/uploads/sustainable/' . $sustainable->image);

        Storage::disk('local')->delete('public/uploads/sustainable/' . $sustainable->file);

        $sustainable->delete();

    }// end of delete

}//end of controller
