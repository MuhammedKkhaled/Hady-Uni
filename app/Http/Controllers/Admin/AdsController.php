<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\AdsRequest;
use App\Models\Department;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Ads;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_ads')->only(['index']);
        $this->middleware('permission:create_ads')->only(['create', 'store']);
        $this->middleware('permission:update_ads')->only(['edit', 'update']);
        $this->middleware('permission:delete_ads')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.ads.index');

    }// end of index

    public function data()
    {
        $Ads = Ads::get();


        return DataTables::of($Ads)

            ->addColumn('record_select', 'admin.ads.data_table.record_select')
            ->addColumn('image', function (Ads $ad) {
                return view('admin.ads.data_table.image', compact('ad'));
            })
            ->editColumn('title_'. LaravelLocalization::getCurrentLocale(), function ( Ads $ad) {
                return $ad->{"title_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->addColumn('content_'. LaravelLocalization::getCurrentLocale(), function (Ads $ad) {
                return strip_tags( $ad->{"content_".LaravelLocalization::getCurrentLocale()}) ;
            })
            ->editColumn('created_at', function (Ads $ad) {
                return $ad->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.ads.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.ads.create', compact('depratments'));

    }// end of create

    public function store(AdsRequest $request)
    {

        $requestData = $request->validated();

        $requestData['author'] = auth()->user()->name;

        if ($request->image) {
            $request->image->store('public/uploads/ads/');
            $requestData['image'] = $request->image->hashName();
        }

        Ads::create($requestData);

        session()->flash('success', __('Added Successfully'));

        return redirect()->route('admin.ads.index');

    }// end of store

    public function edit(Ads $Ad)
    {
        $departments = Department::all();
        return view('admin.ads.edit', compact('departments', 'Ad'));

    }// end of edit

    public function update(AdsRequest $request, Ads $Ad)
    {

        $requestData = $request->validated();

        $requestData['author'] = auth()->user()->name;

        if ($request->image) {

            Storage::disk('local')->delete('public/uploads/ads/' . $Ad->image);

            $request->image->store('public/uploads/ads/');

            $requestData['image'] = $request->image->hashName();
        }

        $Ad->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.ads.index');

    }// end of update

    public function destroy(Ads $Ad)
    {
        $this->delete($Ad);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $Ad = Ads::FindOrFail($recordId);
            $this->delete($Ad);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Ads $Ad)
    {
        Storage::disk('local')->delete('public/uploads/ads/' . $Ad->image);
        $Ad->delete();

    }// end of delete

}//end of controller
