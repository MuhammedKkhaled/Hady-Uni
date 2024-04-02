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
        $this->middleware('permission:read_Ads')->only(['index']);
        $this->middleware('permission:create_Ads')->only(['create', 'store']);
        $this->middleware('permission:update_Ads')->only(['edit', 'update']);
        $this->middleware('permission:delete_Ads')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.ads.index');

    }// end of index

    public function data()
    {
        $Ads = Ads::get();



        $locale =  LaravelLocalization::getCurrentLocale()  ;



        return DataTables::of($Ads)

            ->addColumn('record_select', 'admin.ads.data_table.record_select')
            ->addColumn('image', function (Ads $new) {
                return view('admin.ads.data_table.image', compact('new'));
            })
            ->editColumn('title_'. LaravelLocalization::getCurrentLocale(), function ( Ads $new) {
                return $new->{"title_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->addColumn('content_'. LaravelLocalization::getCurrentLocale(), function (Ads $new) {
                return strip_tags( $new->{"content_".LaravelLocalization::getCurrentLocale()}) ;
            })
            ->editColumn('created_at', function (Ads $category) {
                return $category->created_at->format('Y-m-d');
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

    public function edit(Ads $Ads)
    {
        return view('admin.ads.edit', compact('Ads'));

    }// end of edit

    public function update(AdsRequest $request, Ads $Ads)
    {
        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/Ads/' . $Ads->image);
            $request->image->store('public/uploads/Ads/');
            $requestData['image'] = $request->image->hashName();
        }

        $Ads->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.ads.index');

    }// end of update

    public function destroy(Ads $Ads)
    {
        $this->delete($Ads);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $Ads = Ads::FindOrFail($recordId);
            $this->delete($Ads);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Ads $Ads)
    {
        Storage::disk('local')->delete('public/uploads/Ads/' . $Ads->image);
        $Ads->delete();

    }// end of delete

}//end of controller
