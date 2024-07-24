<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Requests\Admin\LinkRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\StudentRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\Gallery;
use App\Models\Link;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_galleries')->only(['index']);
        $this->middleware('permission:create_galleries')->only(['create', 'store']);
        $this->middleware('permission:update_galleries')->only(['edit', 'update']);
        $this->middleware('permission:delete_galleries')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.galleries.index');

    }// end of index

    public function data()
    {
        $gallery = Gallery::get();

        return DataTables::of($gallery)

            ->addColumn('record_select', 'admin.galleries.data_table.record_select')
            ->editColumn('department_id' ,function (Gallery $gallery){
                return $gallery->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Gallery $gallery) {
                return $gallery->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.galleries.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.galleries.create' , compact('depratments'));
    }// end of create

    public function store(Request $request)
    {
        foreach ($request->file('images') as $index => $item) {
            $request->images[$index]->store('public/uploads/galleries/');
            $requestData['image_1'] = $request->images[$index]->hashName();
            $requestData['department_id']  = $request['department_id'];
            Gallery::create($requestData);
        }

        Gallery::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.galleries.index');

    }// end of store

    public function edit(Gallery $gallery)
    {

       $departments=  Department::all();
        return view('admin.galleries.edit', compact('gallery' , 'departments'));

    }// end of edit

    public function update(GalleryRequest $request, Gallery $gallery)
    {

        $requestData = $request->validated();

        if ($request->image_1) {
            Storage::disk('local')->delete('public/uploads/galleries/' . $gallery->image_1);

            $request->image_1->store('public/uploads/galleries/');

            $requestData['image_1'] = $request->image_1->hashName();
        }

        $gallery->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.galleries.index');

    }// end of update

    public function destroy(Gallery $gallery)
    {
        $this->delete($gallery);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $gallery = Gallery::FindOrFail($recordId);
            $this->delete($gallery);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Gallery $gallery)
    {
        Storage::disk('local')->delete('public/uploads/galleries/' . $gallery->image_1);
        $gallery->delete();
    }// end of delete

}//end of controller
