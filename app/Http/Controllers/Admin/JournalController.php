<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ConferenceRequest;
use App\Http\Requests\Admin\JournalRequest;
use App\Http\Requests\Admin\LibraryRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Journal;
use App\Models\Library;
use App\Models\News;
use App\Models\Specification;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class JournalController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_journals')->only(['index']);
        $this->middleware('permission:create_journals')->only(['create', 'store']);
        $this->middleware('permission:update_journals')->only(['edit', 'update']);
        $this->middleware('permission:delete_journals')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.journals.index');

    }// end of index

    public function data()
    {
        $journals = Journal::get();

        return DataTables::of($journals)

            ->addColumn('record_select', 'admin.journals.data_table.record_select')
            ->addColumn('file', function (Journal $journal) {
                return view('admin.journals.data_table.image', compact('journal'));

            })
            ->editColumn('created_at', function (Journal $journal) {
                return $journal->created_at->format('Y-m-d');
            })
            ->editColumn('published_at', function (Journal $journal) {
                return $journal->published_at->format('Y-M');
            })
            ->addColumn('actions', 'admin.journals.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.journals.create');
    }// end of create

    public function store(JournalRequest $request)
    {

        $requestData = $request->validated();

        if ($request->file) {
            $request->file->store('public/uploads/journals/');
            $requestData['file'] = $request->file->hashName();
        }

        Journal::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.journals.index');

    }// end of store

    public function edit(Journal $journal)
    {

        return view('admin.journals.edit', compact('journal'));

    }// end of edit

    public function update(JournalRequest $request, Journal $journal)
    {
        $requestData = $request->validated();
        if ($request->file) {
            Storage::disk('local')->delete('public/uploads/journals/' . $journal->file);
            $request->file->store('public/uploads/journals/');
            $requestData['file'] = $request->file->hashName();
        }

        $journal->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.journals.index');

    }// end of update

    public function destroy(Journal $journal)
    {
        $this->delete($journal);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $journal = Journal::FindOrFail($recordId);
            $this->delete($journal);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Journal $journal)
    {
        Storage::disk('local')->delete('public/uploads/journals/' . $journal->file);
        $journal->delete();

    }// end of delete

}//end of controller
