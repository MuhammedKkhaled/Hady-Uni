<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CharactersRequest;
use App\Models\Characters;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class CharactersController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read_characters')->only(['index']);
        $this->middleware('permission:create_characters')->only(['create', 'store']);
        $this->middleware('permission:update_characters')->only(['edit', 'update']);
        $this->middleware('permission:delete_characters')->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.characters.index');

    }// end of index

    public function data()
    {
        $characters = Characters::get();



        $locale =  LaravelLocalization::getCurrentLocale()  ;



        return DataTables::of($characters)

            ->addColumn('record_select', 'admin.characters.data_table.record_select')
            ->addColumn('image', function (Characters $new) {
                return view('admin.characters.data_table.image', compact('new'));
            })
            ->editColumn('title_'. LaravelLocalization::getCurrentLocale(), function ( Characters $new) {
                return $new->{"title_".LaravelLocalization::getCurrentLocale()} ;
            })
            ->addColumn('content_'. LaravelLocalization::getCurrentLocale(), function (Characters $new) {
                return strip_tags( $new->{"content_".LaravelLocalization::getCurrentLocale()}) ;
            })
            ->editColumn('created_at', function (Characters $category) {
                return $category->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.characters.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.characters.create');

    }// end of create

    public function store(CharactersRequest $request)
    {

        $requestData = $request->validated();

        $requestData['author'] = auth()->user()->name;

        if ($request->image) {
            $request->image->store('public/uploads/characters/');
            $requestData['image'] = $request->image->hashName();
        }

        Characters::create($requestData);

        session()->flash('success', __('Added Successfully'));

        return redirect()->route('admin.characters.index');

    }// end of store

    public function edit(Characters $characters)
    {
        return view('admin.characters.edit', compact('characters'));

    }// end of edit

    public function update(CharactersRequest $request, Characters $characters)
    {
        $requestData = $request->validated();
        if ($request->image) {
            Storage::disk('local')->delete('public/uploads/characters/' . $characters->image);
            $request->image->store('public/uploads/characters/');
            $requestData['image'] = $request->image->hashName();
        }

        $characters->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.characters.index');

    }// end of update

    public function destroy(Characters $characters)
    {
        $this->delete($characters);
        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $characters = Characters::FindOrFail($recordId);
            $this->delete($characters);

        }//end of for each

        session()->flash('success', __('custom.deleted_successfully'));
        return response(__('custom.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Characters $characters)
    {
        Storage::disk('local')->delete('public/uploads/characters/' . $characters->image);
        $characters->delete();

    }// end of delete

}//end of controller
