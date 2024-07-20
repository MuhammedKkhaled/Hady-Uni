<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PatentsRequest;
use App\Models\Department;
use App\Models\Patents;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class PatentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_patents')->only(['index']);
        $this->middleware('permission:create_patents')->only(['create', 'store']);
        $this->middleware('permission:update_patents')->only(['edit', 'update']);
        $this->middleware('permission:delete_patents')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.patents.index');

    }// end of index

    public function data()
    {
        $patents = Patents::get();



        $locale =  LaravelLocalization::getCurrentLocale()  ;



        return DataTables::of($patents)

            ->addColumn('record_select', 'admin.patents.data_table.record_select')
            ->editColumn('title_'. LaravelLocalization::getCurrentLocale(), function ( Patents $new) {
                return $new->{"title_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->addColumn('content_'. LaravelLocalization::getCurrentLocale(), function (Patents $new) {
                return strip_tags( $new->{"content_".LaravelLocalization::getCurrentLocale()}) ;
            })
            ->editColumn('created_at', function (Patents $category) {
                return $category->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.patents.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments=  Department::all();
        return view('admin.patents.create', compact('depratments'));

    }// end of create

    public function store(PatentsRequest $request)
    {

        $requestData = $request->validated();

        $requestData['author'] = auth()->user()->name;
        Patents::create($requestData);

        session()->flash('success', __('Added Successfully'));

        return redirect()->route('admin.patents.index');

    }// end of store

    public function edit(Patents $patent)
    {
        $departments=  Department::all();
        return view('admin.patents.edit', compact('patent','departments'));

    }// end of edit

    public function update(PatentsRequest $request, Patents $patents)
    {
        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/patents/' . $patents->image);
            $request->image->store('public/uploads/patents/');
            $requestData['image'] = $request->image->hashName();
        }

        $patents->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.patents.index');

    }// end of update

    public function destroy(Patents $patent)
    {
        $this->delete($patent);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $patents = Patents::FindOrFail($recordId);
            $this->delete($patents);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Patents $patents)
    {
        Storage::disk('local')->delete('public/uploads/patents/' . $patents->image);
        $patents->delete();

    }// end of delete

}//end of controller
