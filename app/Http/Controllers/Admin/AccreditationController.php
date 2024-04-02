<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\AccreditationRequest;
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
use App\Models\Accreditation;
use App\Models\Link;
use App\Models\News;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class AccreditationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_accreditation')->only(['index']);
        $this->middleware('permission:create_accreditation')->only(['create', 'store']);
        $this->middleware('permission:update_accreditation')->only(['edit', 'update']);
        $this->middleware('permission:delete_accreditation')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.accreditation.index');

    }// end of index

    public function data()
    {
        $accreditation = Accreditation::get();

        return DataTables::of($accreditation)

            ->addColumn('record_select', 'admin.accreditation.data_table.record_select')
            ->editColumn('department_id' ,function (Accreditation $accreditation){
                return $accreditation->department->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Accreditation $accreditation) {
                return $accreditation->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.accreditation.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  Department::all();
        return view('admin.accreditation.create' , compact('depratments'));
    }// end of create

    public function store(AccreditationRequest $request)
    {
        $requestData = $request->validated();

        if ($request->image_1) {
            $request->image_1->store('public/uploads/accreditation/');
            $requestData['image_1'] = $request->image_1->hashName();

        }

        Accreditation::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.accreditation.index');

    }// end of store

    public function edit(Accreditation $accreditation)
    {

       $departments=  Department::all();
        return view('admin.accreditation.edit', compact('accreditation' , 'departments'));

    }// end of edit

    public function update(AccreditationRequest $request, Accreditation $accreditation)
    {

        $requestData = $request->validated();

        if ($request->image_1) {
            Storage::disk('local')->delete('public/uploads/accreditation/' . $accreditation->image_1);

            $request->image_1->store('public/uploads/accreditation/');

            $requestData['image_1'] = $request->image_1->hashName();
        }

        $accreditation->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.accreditation.index');

    }// end of update

    public function destroy(Accreditation $accreditation)
    {
        $this->delete($accreditation);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $accreditation = Accreditation::FindOrFail($recordId);
            $this->delete($accreditation);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Accreditation $accreditation)
    {
        Storage::disk('local')->delete('public/uploads/accreditation/' . $accreditation->image_1);
        $accreditation->delete();
    }// end of delete

}//end of controller
