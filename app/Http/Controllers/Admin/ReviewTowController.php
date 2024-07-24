<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewTowRequest;
use App\Models\ReviewTow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;

class ReviewTowController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_reviewtows')->only(['index']);
        $this->middleware('permission:create_reviewtows')->only(['create', 'store']);
        $this->middleware('permission:update_reviewtows')->only(['edit', 'update']);
        $this->middleware('permission:delete_reviewtows')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
        return view('admin.reviewtows.index');

    }// end of index

    public function data()
    {
        $reviewtows = ReviewTow::get();

        return DataTables::of($reviewtows)

            ->addColumn('record_select', 'admin.reviewtows.data_table.record_select')

            ->editColumn('state' ,function (ReviewTow $reviewtow){
                if($reviewtow->state == 0){
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"تحت المراجعة":'wait';
                }elseif($reviewtow->state >0){
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"موافقة":"approved";
                }else{
                    return (LaravelLocalization::getCurrentLocale() == "ar")?"رفض":"reject";
                }
            })
            ->editColumn('name' ,function (ReviewTow $reviewtow){
                return $reviewtow->name;
            })
            ->editColumn('type' ,function (ReviewTow $reviewtow){
                return $reviewtow->type;
            })
            ->editColumn('number_employees	' ,function (ReviewTow $reviewtow){
                return $reviewtow->number_employees;
            })
            ->editColumn('created_at', function (ReviewTow $reviewtow) {
                return $reviewtow->created_at->format('Y-m-d H:i:s a');
            })
            ->addColumn('actions', 'admin.reviewtows.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data


    public function edit(ReviewTow $reviewtow)
    {
        return view('admin.reviewtows.edit', compact('reviewtow'));

    }// end of edit

    public function update(Request $request, ReviewTow $reviewtow)    {
        
        $validated_data =  $request->only(['state']);
        $reviewtow->update($validated_data);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.reviewtows.index');
    }// end of update

    public function destroy(ReviewTow $reviewtow)
    {

        $reviewtow->delete();
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $reviewtow = ReviewTow::FindOrFail($recordId);
            $reviewtow->delete();

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(ReviewTow $reviewtow)
    {
        $reviewtow->delete();

    }// end of delete

}//end of controller
