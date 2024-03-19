<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\News;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class ConferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_conferences')->only(['index']);
        $this->middleware('permission:create_conferences')->only(['create', 'store']);
        $this->middleware('permission:update_conferences')->only(['edit', 'update']);
        $this->middleware('permission:delete_conferences')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.conferences.index');

    }// end of index

    public function data()
    {
        $news = Conference::get();

        return DataTables::of($news)

            ->addColumn('record_select', 'admin.conferences.data_table.record_select')
            ->addColumn('image', function (Conference $conference) {
                return view('admin.conferences.data_table.image', compact('conference'));

            })
            ->editColumn('title_'.LaravelLocalization::getCurrentLocale() , function (Conference $conference){
                return $conference->{"title_".LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('location_'.LaravelLocalization::getCurrentLocale() , function (Conference $conference){
                return $conference->{"location_".LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('created_at', function (Conference $conference) {
                return $conference->created_at->format('Y-m-d');
            })
            ->editColumn('date', function (Conference $conference) {
                return $conference->date->format('Y-m-d');
            })
            ->editColumn('start_time', function (Conference $conference) {
                return $conference->start_time->format('H:i a'); // Format start time as 'hour:minute'
            })
            ->editColumn('end_time', function (Conference $conference) {
                return $conference->end_time->format('H:i a'); // Format end time as 'hour:minute'
            })

            ->addColumn('actions', 'admin.conferences.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.conferences.create');

    }// end of create

    public function store(ConferenceRequest $request)
    {

        $requestData = $request->validated();

        if ($request->image) {
            $request->image->store('public/uploads/conferences/');
            $requestData['image'] = $request->image->hashName();
        }

        Conference::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.conferences.index');

    }// end of store

    public function edit(Conference $conference)
    {
        return view('admin.conferences.edit', compact('conference'));

    }// end of edit

    public function update(ConferenceRequest $request, News $news)
    {
        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/news/' . $news->image);
            $request->image->store('public/uploads/news/');
            $requestData['image'] = $request->image->hashName();
        }

        $news->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.news.index');

    }// end of update

    public function destroy(Conference $conference)
    {
        $this->delete($conference);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $conference = Conference::FindOrFail($recordId);
            $this->delete($conference);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Conference $conference)
    {
        Storage::disk('local')->delete('public/uploads/conferences/' . $conference->image);
        $conference->delete();

    }// end of delete

}//end of controller
