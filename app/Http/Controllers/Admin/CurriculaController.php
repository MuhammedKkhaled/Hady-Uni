<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\CurriculaRequest;
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
use App\Models\Curricula;
use App\Models\Link;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class CurriculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_curricula')->only(['index']);
        $this->middleware('permission:create_curricula')->only(['create', 'store']);
        $this->middleware('permission:update_curricula')->only(['edit', 'update']);
        $this->middleware('permission:delete_curricula')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.curricula.index');

    }// end of index

    public function data()
    {
        $curricula = Curricula::get();

        return DataTables::of($curricula)

            ->addColumn('record_select', 'admin.curricula.data_table.record_select')

            ->editColumn('name_'.LaravelLocalization::getCurrentLocale() ,function (Curricula $curriculum){
                return $curriculum->{"name_".LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('department_id' ,function (Curricula $curriculum){
                return $curriculum->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Curricula $curriculum) {
                return $curriculum->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.curricula.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.curricula.create' , compact('depratments'));
    }// end of create

    public function store(CurriculaRequest $request)
    {
        $requestData = $request->validated();

        if ($request->image_1) {
            $request->image_1->store('public/uploads/curricula/');
            $requestData['image_1'] = $request->image_1->hashName();

        }

        Curricula::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.curricula.index');

    }// end of store

    public function edit(Curricula $curriculum)
    {

       $departments=  Department::all();
        return view('admin.curricula.edit', compact('curriculum' , 'departments'));

    }// end of edit

    public function update(CurriculaRequest $request, Curricula $curriculum)
    {

        $requestData = $request->validated();

        if ($request->image_1) {
            Storage::disk('local')->delete('public/uploads/curricula/' . $curriculum->image_1);

            $request->image_1->store('public/uploads/curricula/');

            $requestData['image_1'] = $request->image_1->hashName();
        }

        $curriculum->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.curricula.index');

    }// end of update

    public function destroy(Curricula $curriculum)
    {
        $this->delete($curriculum);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $curriculum = Curricula::FindOrFail($recordId);
            $this->delete($curriculum);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Curricula $curriculum)
    {
        Storage::disk('local')->delete('public/uploads/curricula/' . $curriculum->image_1);
        $curriculum->delete();
    }// end of delete

}//end of controller
