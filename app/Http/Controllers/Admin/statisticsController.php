<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AffiliateRequest;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\StatisticsRequest;
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
use App\Models\Statistics;
use App\Models\Link;
use App\Models\Student;
use App\Models\Teacher;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_statistics')->only(['index']);
        $this->middleware('permission:create_statistics')->only(['create', 'store']);
        $this->middleware('permission:update_statistics')->only(['edit', 'update']);
        $this->middleware('permission:delete_statistics')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.statistics.index');

    }// end of index

    public function data()
    {
        $statistics = Statistics::get();

        return DataTables::of($statistics)

            ->editColumn('graduated' ,function (Statistics $statistics){
                return $statistics->graduated;
            })
            ->editColumn('students' ,function (Statistics $statistics){
                return $statistics->students;
            })
            ->editColumn('success_percent' ,function (Statistics $statistics){
                return $statistics->success_percent;
            })
            ->editColumn('students_abroad' ,function (Statistics $statistics){
                return $statistics->students_abroad;
            })
            ->editColumn('created_at', function (Statistics $statistics) {
                return $statistics->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.statistics.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $depratments =  News::all();
        return view('admin.statistics.create' , compact('depratments'));
    }// end of create

    public function store(StatisticsRequest $request)
    {
        $requestData = $request->validated();

        if ($request->image_1) {
            $request->image_1->store('public/uploads/statistics/');
            $requestData['image_1'] = $request->image_1->hashName();

        }

        Statistics::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.statistics.index');

    }// end of store

    public function edit(Statistics $statistic)
    {
        return view('admin.statistics.edit', compact('statistic'));

    }// end of edit

    public function update(StatisticsRequest $request, Statistics $statistic)
    {

        $requestData = $request->validated();
        $statistic->update($requestData);
        session()->flash('success', __('custom.Update Successfully'));
        return redirect()->route('admin.statistics.index');

    }// end of update

    public function destroy(Statistics $statistic)
    {
        $this->delete($statistic);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $statistics = Statistics::FindOrFail($recordId);
            $this->delete($statistics);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Statistics $statistic)
    {
        Storage::disk('local')->delete('public/uploads/statistics/' . $statistic->image_1);
        $statistic->delete();
    }// end of delete

}//end of controller
