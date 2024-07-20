<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_reviews')->only(['index']);
        $this->middleware('permission:create_reviews')->only(['create', 'store']);
        $this->middleware('permission:update_reviews')->only(['edit', 'update']);
        $this->middleware('permission:delete_reviews')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.reviews.index');

    }// end of index

    public function data()
    {
        $reviews = Review::get();

        return DataTables::of($reviews)

            ->addColumn('record_select', 'admin.reviews.data_table.record_select')

            ->editColumn('department_id' ,function (Review $review){
                return $review->sustainable->{'name_'.LaravelLocalization::getCurrentLocale()};
            })
            ->editColumn('state' ,function (Review $review){
                if($review->state == 0){
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"تحت المراجعة":'wait';
                }elseif($review->state >0){
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"موافقة":"approved";
                }else{
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"رفض":"reject";
                }
            })
            ->editColumn('name' ,function (Review $review){
                return $review->name;
            })
            ->editColumn('nationality' ,function (Review $review){
                return $review->nationality;
            })
            ->editColumn('created_at', function (Review $review) {
                return $review->created_at->format('Y-m-d H:i:s a');
            })
            ->addColumn('actions', 'admin.reviews.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data


    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));

    }// end of edit

    public function update(Request $request, Review $review)    {
        
        $validated_data =  $request->only(['state']);
        $review->update($validated_data);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.reviews.index');
    }// end of update

    public function destroy(Review $review)
    {

        $review->delete();
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $review = Review::FindOrFail($recordId);
            $review->delete();

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Review $news)
    {
        Storage::disk('local')->delete('public/uploads/review/' . $news->personal);
        $news->delete();

    }// end of delete

}//end of controller
