<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;

class SpecificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_specifications')->only(['index']);
        $this->middleware('permission:create_specifications')->only(['create', 'store']);
        $this->middleware('permission:update_specifications')->only(['edit', 'update']);
        $this->middleware('permission:delete_specifications')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.specifications.index');

    }// end of index

    public function data()
    {
        $specificaiton = Specification::get();

        return DataTables::of($specificaiton)

            ->addColumn('record_select', 'admin.specifications.data_table.record_select')
//            ->addColumn('image', function (News $new) {
//                return view('admin.news.data_table.image', compact('new'));
//
//            })
             ->editColumn('name_'.LaravelLocalization::getCurrentLocale() , function (Specification $specification){
                 return $specification->{"name_".LaravelLocalization::getCurrentLocale()};
            })

            ->editColumn('created_at', function (Specification $specification) {
                return $specification->created_at->format('Y-m-d');
            })
//            ->editColumn('content', function (News $new) {
//                // Use strip_tags to remove HTML tags from the content
//                return strip_tags($new->content);
//            })
            ->addColumn('actions', 'admin.specifications.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.specifications.create');

    }// end of create

    public function store(Request $request)
    {

        $requestData = $request->validate([
            'name_en'=>['required' , "string" , 'unique:specifications,name_en'],
            'name_ar'=>['required' , "string" , 'unique:specifications,name_ar'],
        ]);



        Specification::create($requestData);

        session()->flash('success', __('Added Successfully'));

        return redirect()->route('admin.specifications.index');

    }// end of store

    public function edit(Specification $specification)
    {
        return view('admin.specifications.edit', compact('specification'));

    }// end of edit

    public function update(Request $request, Specification $specification)
    {
        $requestData = $request->validate([
            'name_ar'=>['required','string','unique:specifications,name_ar,'.$specification->id],
            'name_en'=>['required','string','unique:specifications,name_en,'.$specification->id],
        ]);

        $specification->update($requestData);

        session()->flash('success', __('Update Successfully'));

        return redirect()->route('admin.specifications.index');

    }// end of update

    public function destroy(Specification $specification)
    {

        $specification->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $Specification = Specification::FindOrFail($recordId);
            $Specification->delete();

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
