<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\SustainablesGalleryRequest;
use App\Http\Requests\Admin\LinkRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\StudentRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Sustainable;
use App\Models\SustainablesGallery;
use App\Models\Link;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class SustainablesGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_sustainablesgalleries')->only(['index']);
        $this->middleware('permission:create_sustainablesgalleries')->only(['create', 'store']);
        $this->middleware('permission:update_sustainablesgalleries')->only(['edit', 'update']);
        $this->middleware('permission:delete_sustainablesgalleries')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.sustainablesgalleries.index');

    }// end of index

    public function data()
    {
        $sustainablesgallery = SustainablesGallery::get();

        return DataTables::of($sustainablesgallery)

            ->addColumn('record_select', 'admin.galleries.data_table.record_select')
            ->editColumn('department_id' ,function (SustainablesGallery $sustainablesgallery){
                return $sustainablesgallery->sustainable->titel_en;
            })
            ->editColumn('created_at', function (SustainablesGallery $sustainablesgallery) {
                return $sustainablesgallery->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.sustainablesgalleries.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Sustainable::all();
        return view('admin.sustainablesgalleries.create' , compact('depratments'));
    }// end of create

    public function store(SustainablesGalleryRequest $request)
    {
        $requestData = $request->validated();

        if ($request->image_1) {
            $request->image_1->store('public/uploads/sustainablesgalleries/');
            $requestData['image_1'] = $request->image_1->hashName();

        }

        SustainablesGallery::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.sustainablesgalleries.index');

    }// end of store

    public function edit(SustainablesGallery $sustainablesgallery)
    {

       $departments=  Sustainable::all();
        return view('admin.sustainablesgalleries.edit', compact('sustainablesgallery' , 'departments'));

    }// end of edit

    public function update(SustainablesGalleryRequest $request, SustainablesGallery $sustainablesgallery)
    {

        $requestData = $request->validated();

        if ($request->image_1) {
            Storage::disk('local')->delete('public/uploads/sustainablesgalleries/' . $sustainablesgallery->image_1);

            $request->image_1->store('public/uploads/sustainablesgalleries/');

            $requestData['image_1'] = $request->image_1->hashName();
        }

        $sustainablesgallery->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.sustainablesgalleries.index');

    }// end of update

    public function destroy(SustainablesGallery $sustainablesgallery)
    {
        $this->delete($sustainablesgallery);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $sustainablesgallery = SustainablesGallery::FindOrFail($recordId);
            $this->delete($sustainablesgallery);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(SustainablesGallery $sustainablesgallery)
    {
        Storage::disk('local')->delete('public/uploads/sustainablesgalleries/' . $sustainablesgallery->image_1);
        $sustainablesgallery->delete();
    }// end of delete

}//end of controller
