<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\NewsGalleryRequest;
use App\Http\Requests\Admin\LinkRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\StudentRequest;
use App\Http\Requests\Admin\TeacherStoreRequest;
use App\Http\Requests\Admin\TeacherUpdateRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\News;
use App\Models\NewsGallery;
use App\Models\Link;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class NewsGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_newsgalleries')->only(['index']);
        $this->middleware('permission:create_newsgalleries')->only(['create', 'store']);
        $this->middleware('permission:update_newsgalleries')->only(['edit', 'update']);
        $this->middleware('permission:delete_newsgalleries')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.newsgalleries.index');

    }// end of index

    public function data()
    {
        $newsgalleries = NewsGallery::get();

        return DataTables::of($newsgalleries)

            ->addColumn('record_select', 'admin.galleries.data_table.record_select')
            ->editColumn('department_id' ,function (NewsGallery $newsgalleries){
                return $newsgalleries->sustainable->title_en;
            })
            ->editColumn('created_at', function (NewsGallery $newsgalleries) {
                return $newsgalleries->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.newsgalleries.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  News::all();
        return view('admin.newsgalleries.create' , compact('depratments'));
    }// end of create

    public function store(Request $request)
    {        
        foreach ($request->file('images') as $index => $item) {
            $request->images[$index]->store('public/uploads/newsgalleries/');
            $requestData['image_1'] = $request->images[$index]->hashName();
            $requestData['department_id']  = $request['department_id'];
            NewsGallery::create($requestData);
        }


        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.newsgalleries.index');

    }// end of store

    public function edit(NewsGallery $newsgallery)
    {
       $departments=  News::all();
        return view('admin.newsgalleries.edit', compact('newsgallery' , 'departments'));

    }// end of edit

    public function update(NewsGalleryRequest $request, NewsGallery $newsgallery)
    {

        $requestData = $request->validated();

        if ($request->image_1) {
            Storage::disk('local')->delete('public/uploads/newsgalleries/' . $newsgallery->image_1);

            $request->image_1->store('public/uploads/newsgalleries/');

            $requestData['image_1'] = $request->image_1->hashName();
        }

        $newsgallery->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.newsgalleries.index');

    }// end of update

    public function destroy(NewsGallery $newsgallery)
    {
        $this->delete($newsgallery);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $newsgalleries = NewsGallery::FindOrFail($recordId);
            $this->delete($newsgalleries);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(NewsGallery $newsgallery)
    {
        Storage::disk('local')->delete('public/uploads/newsgalleries/' . $newsgallery->image_1);
        $newsgallery->delete();
    }// end of delete

}//end of controller
