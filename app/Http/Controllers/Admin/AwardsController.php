<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AwardsRequest;
use App\Models\Awards;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class AwardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_awards')->only(['index']);
        $this->middleware('permission:create_awards')->only(['create', 'store']);
        $this->middleware('permission:update_awards')->only(['edit', 'update']);
        $this->middleware('permission:delete_awards')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.awards.index');

    }// end of index

    public function data()
    {
        $awards = Awards::get();



        $locale =  LaravelLocalization::getCurrentLocale()  ;



        return DataTables::of($awards)

            ->addColumn('record_select', 'admin.awards.data_table.record_select')
            ->addColumn('image', function (Awards $new) {
                return view('admin.awards.data_table.image', compact('new'));
            })
            ->editColumn('title_'. LaravelLocalization::getCurrentLocale(), function ( Awards $new) {
                return $new->{"title_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->addColumn('content_'. LaravelLocalization::getCurrentLocale(), function (Awards $new) {
                return strip_tags( $new->{"content_".LaravelLocalization::getCurrentLocale()}) ;
            })
            ->editColumn('created_at', function (Awards $category) {
                return $category->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.awards.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.awards.create');

    }// end of create

    public function store(AwardsRequest $request)
    {

        $requestData = $request->validated();

        $requestData['author'] = auth()->user()->name;

        if ($request->image) {
            $request->image->store('public/uploads/awards/');
            $requestData['image'] = $request->image->hashName();
        }

        Awards::create($requestData);

        session()->flash('success', __('Added Successfully'));

        return redirect()->route('admin.awards.index');

    }// end of store

    public function edit(Awards $awards)
    {
        return view('admin.awards.edit', compact('awards'));

    }// end of edit

    public function update(AwardsRequest $request, Awards $awards)
    {
        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/awards/' . $awards->image);
            $request->image->store('public/uploads/awards/');
            $requestData['image'] = $request->image->hashName();
        }

        $awards->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.awards.index');

    }// end of update

    public function destroy(Awards $awards)
    {
        $this->delete($awards);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $awards = Awards::FindOrFail($recordId);
            $this->delete($awards);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Awards $awards)
    {
        Storage::disk('local')->delete('public/uploads/awards/' . $awards->image);
        $awards->delete();

    }// end of delete

}//end of controller
