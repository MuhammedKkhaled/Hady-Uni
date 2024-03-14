<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\News;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_news')->only(['index']);
        $this->middleware('permission:create_news')->only(['create', 'store']);
        $this->middleware('permission:update_news')->only(['edit', 'update']);
        $this->middleware('permission:delete_news')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.news.index');

    }// end of index

    public function data()
    {
        $news = News::get();

        return DataTables::of($news)

            ->addColumn('record_select', 'admin.news.data_table.record_select')
            ->addColumn('image', function (News $new) {
                return view('admin.news.data_table.image', compact('new'));

            })
            ->editColumn('created_at', function (News $category) {
                return $category->created_at->format('Y-m-d');
            })
            ->editColumn('content', function (News $new) {
                // Use strip_tags to remove HTML tags from the content
                return strip_tags($new->content);
            })
            ->addColumn('actions', 'admin.news.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.news.create');

    }// end of create

    public function store(NewsRequest $request)
    {

        $requestData = $request->validated();

        $requestData['author'] = auth()->user()->name;

        if ($request->image) {
            $request->image->store('public/uploads/news/');
            $requestData['image'] = $request->image->hashName();
        }

        News::create($requestData);

        session()->flash('success', 'Added Successfully');

        return redirect()->route('admin.news.index');

    }// end of store

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));

    }// end of edit

    public function update(NewsRequest $request, News $news)
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

    public function destroy(News $news)
    {
        $this->delete($news);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $news = News::FindOrFail($recordId);
            $this->delete($news);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(News $news)
    {
        Storage::disk('local')->delete('public/uploads/news/' . $news->image);
        $news->delete();

    }// end of delete

}//end of controller
