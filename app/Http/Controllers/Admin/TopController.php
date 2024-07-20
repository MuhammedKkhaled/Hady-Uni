<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\TopRequest;
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
use App\Models\Top;
use App\Models\Link;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class TopController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_tops')->only(['index']);
        $this->middleware('permission:create_tops')->only(['create', 'store']);
        $this->middleware('permission:update_tops')->only(['edit', 'update']);
        $this->middleware('permission:delete_tops')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.tops.index');

    }// end of index

    public function data()
    {
        $top = Top::get();

        return DataTables::of($top)

            ->addColumn('record_select', 'admin.tops.data_table.record_select')

            ->editColumn('name_'.LaravelLocalization::getCurrentLocale() ,function (Top $top){
                return $top->{"name_".LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('department_id' ,function (Top $top){
                return $top->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Top $top) {
                return $top->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.tops.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.tops.create' , compact('depratments'));
    }// end of create

    public function store(TopRequest $request)
    {
        $requestData = $request->validated();
        if ($request->image) {
            $request->image->store('public/uploads/top/');
            $requestData['image'] = $request->image->hashName();

        }

        Top::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.tops.index');

    }// end of store

    public function edit(Top $top)
    {

       $departments=  Department::all();
        return view('admin.tops.edit', compact('top' , 'departments'));

    }// end of edit

    public function update(TopRequest $request, Top $top)
    {

        $requestData = $request->validated();

        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/top/' . $top->image);

            $request->image->store('public/uploads/top/');

            $requestData['image'] = $request->image->hashName();
        }

        $top->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.tops.index');

    }// end of update

    public function destroy(Top $top)
    {
        $this->delete($top);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $top = Top::FindOrFail($recordId);
            $this->delete($top);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Top $top)
    {
        Storage::disk('local')->delete('public/uploads/top/' . $top->image);
        $top->delete();
    }// end of delete

}//end of controller
