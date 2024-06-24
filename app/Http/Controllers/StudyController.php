<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyRequest;
use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class StudyController extends Controller
{
    public function store(StudyRequest $request)
    {

        $validated_data =  $request->validated();

        if ($request->personal) {
            $request->personal->store('public/uploads/study/');
            $validated_data['personal'] = $request->personal->hashName();
        }
        if ($request->passport) {
            $request->passport->store('public/uploads/study/');
            $validated_data['passport'] = $request->passport->hashName();
        }
        if ($request->certificate) {
            $request->certificate->store('public/uploads/study/');
            $validated_data['certificate'] = $request->certificate->hashName();
        }
        if ($request->cv) {
            $request->cv->store('public/uploads/study/');
            $validated_data['cv'] = $request->cv->hashName();
        }
        if ($request->certificate_1) {
            $request->certificate_1->store('public/uploads/study/');
            $validated_data['certificate_1'] = $request->certificate_1->hashName();
        }
        Study::create($validated_data);

        return redirect()
            ->back();
    }
}
