<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\News;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class AffiliateController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_affiliates')->only(['index']);
        $this->middleware('permission:create_affiliates')->only(['create', 'store']);
        $this->middleware('permission:update_affiliates')->only(['edit', 'update']);
        $this->middleware('permission:delete_affiliates')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.affiliates.index');

    }// end of index

    public function data()
    {
        $affiliates = Affiliate::get();

        return DataTables::of($affiliates)

            ->addColumn('record_select', 'admin.affiliates.data_table.record_select')
            ->editColumn('department_id' ,function (Affiliate $affiliate){
                return $affiliate->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Affiliate $affiliate) {
                return $affiliate->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.affiliates.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.affiliates.create' , compact('depratments'));
    }// end of create

    public function store(AffiliateRequest $request)
    {


        $requestData = $request->validated();

        if ($request->image) {
            $request->image->store('public/uploads/affiliates/');
            $requestData['image'] = $request->image->hashName();
        }

        Affiliate::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.affiliates.index');

    }// end of store

    public function edit(Affiliate $affiliate)
    {

       $departments=  Department::all();
        return view('admin.affiliates.edit', compact('affiliate' , 'departments'));

    }// end of edit

    public function update(AffiliateRequest $request, Affiliate $affiliate)
    {

        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/affiliates/' . $affiliate->image);
            $request->image->store('public/uploads/affiliates/');
            $requestData['image'] = $request->image->hashName();
        }
        if ($request->cv) {
            Storage::disk('local')->delete('public/uploads/affiliates/' . $affiliate->cv);
            $request->cv->store('public/uploads/affiliates/');
            $requestData['cv'] = $request->cv->hashName();
        }
        $affiliate->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.affiliates.index');

    }// end of update

    public function destroy(Affiliate $affiliate)
    {
        $this->delete($affiliate);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $affiliate = Affiliate::FindOrFail($recordId);
            $this->delete($affiliate);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Affiliate $affiliate)
    {
        $affiliate->delete();

    }// end of delete

}//end of controller
