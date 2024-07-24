<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\ClassificationRequest;
use App\Http\Requests\Admin\ClassificationsRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Affiliate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Department;
use App\Models\Classification;
use App\Models\Classifications;
use App\Models\News;
use App\Models\Specification;
use App\Models\Teacher;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ClassificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_classifications')->only(['index']);
        $this->middleware('permission:create_classifications')->only(['create', 'store']);
        $this->middleware('permission:update_classifications')->only(['edit', 'update']);
        $this->middleware('permission:delete_classifications')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.classifications.index');

    }// end of index

    public function data()
    {
        $classifications = Classifications::get();

        return DataTables::of($classifications)

            ->addColumn('record_select', 'admin.classifications.data_table.record_select')
           
            ->editColumn('webometrics', function ( Classifications $classifications) {
                return strlen($classifications->webometrics) > 20 ? substr($classifications->webometrics, 0, 20) . '...' : $classifications->webometrics;
            })
            ->editColumn('greenmetrics', function ( Classifications $classifications) {
                return strlen($classifications->greenmetrics) > 20 ? substr($classifications->greenmetrics, 0, 20) . '...' : $classifications->greenmetrics;
            })
            ->editColumn('scopus', function ( Classifications $classifications) {
                return strlen($classifications->scopus) > 20 ? substr($classifications->scopus, 0, 20) . '...' : $classifications->scopus;
            })
            ->editColumn('scival', function ( Classifications $classifications) {
                return strlen($classifications->scival) > 20 ? substr($classifications->scival, 0, 20) . '...' : $classifications->scival;
            })
            ->addColumn('actions', 'admin.classifications.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $teachers =  Teacher::all();
        $affiliates =  Affiliate::all();
        return view('admin.classifications.create' , compact('teachers','affiliates'));
    }// end of create

    public function store(ClassificationsRequest $request)
    {

        $requestData = $request->validated();

        Classifications::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.classifications.index');

    }// end of store

    public function edit(Classifications $classification)
    {
        return view('admin.classifications.edit', compact('classification'));

    }// end of edit

    public function update(ClassificationsRequest $request, Classifications $classification)
    {
        $requestData = $request->validated();
        if ($request->webometrics) {
            Storage::disk('local')->delete('public/uploads/classifications/' . $classification->webometrics);
            $request->webometrics->store('public/uploads/classifications/');
            $requestData['webometrics'] = $request->webometrics->hashName();
        }
        if ($request->greenmetrics) {
            Storage::disk('local')->delete('public/uploads/classifications/' . $classification->greenmetrics);
            $request->greenmetrics->store('public/uploads/classifications/');
            $requestData['greenmetrics'] = $request->greenmetrics->hashName();
        }
        if ($request->scopus) {
            Storage::disk('local')->delete('public/uploads/classifications/' . $classification->scopus);
            $request->scopus->store('public/uploads/classifications/');
            $requestData['scopus'] = $request->scopus->hashName();
        }
        if ($request->scival) {
            Storage::disk('local')->delete('public/uploads/classifications/' . $classification->scival);
            $request->scival->store('public/uploads/classifications/');
            $requestData['scival'] = $request->scival->hashName();
        }

        $classification->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.classifications.index');

    }// end of update

    public function destroy(Classifications $classifications)
    {
        $this->delete($classifications);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $classifications = Classifications::FindOrFail($recordId);
            $this->delete($classifications);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Classifications $classifications)
    {
        Storage::disk('local')->delete('public/uploads/classifications/' . $classifications->file);
        $classifications->delete();

    }// end of delete

}//end of controller
