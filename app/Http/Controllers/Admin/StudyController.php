<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudyRequest;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;

class StudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_studies')->only(['index']);
        $this->middleware('permission:create_studies')->only(['create', 'store']);
        $this->middleware('permission:update_studies')->only(['edit', 'update']);
        $this->middleware('permission:delete_studies')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.studies.index');

    }// end of index

    public function data()
    {
        $studies = Study::get();

        return DataTables::of($studies)

            ->addColumn('record_select', 'admin.studies.data_table.record_select')

            ->editColumn('department_id' ,function (Study $study){
                return $study->sustainable->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('state' ,function (Study $study){
                if($study->state == 0){
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"تحت المراجعة":'wait';
                }elseif($study->state >0){
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"موافقة":"approved";
                }else{
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"رفض":"reject";
                }
            })
            ->editColumn('name' ,function (Study $study){
                return $study->name;
            })
            ->editColumn('nationality' ,function (Study $study){
                return $study->nationality;
            })
            ->editColumn('created_at', function (Study $study) {
                return $study->created_at->format('Y-m-d H:i:s a');
            })
            ->addColumn('actions', 'admin.studies.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data


    public function edit(Study $study)
    {
        return view('admin.studies.edit', compact('study'));

    }// end of edit

    public function update(Request $request, Study $study)    {
        
        $validated_data =  $request->only(['state', 'note']);
        $study->update($validated_data);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.studies.index');
    }// end of update

    public function destroy(Study $study)
    {

        $study->delete();
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $study = Study::FindOrFail($recordId);
            $study->delete();

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Study $news)
    {
        Storage::disk('local')->delete('public/uploads/study/' . $news->personal);
        $news->delete();

    }// end of delete

}//end of controller
