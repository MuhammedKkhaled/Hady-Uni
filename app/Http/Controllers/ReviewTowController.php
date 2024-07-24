<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewTowRequest;
use App\Models\ReviewTow;
use Illuminate\Http\Request;

class ReviewTowController extends Controller
{
    public function store(ReviewTowRequest $request)
    {

        $validated_data =  $request->validated();
        $id = ReviewTow::create($validated_data)->id;

        return redirect()
            ->back()
            ->with('message' , __('custom.doneSend1'));;
    }
    
    public function check(Request  $var)
    {
        $ReviewTow = ReviewTow::findOrFail($var->id);
        return view("frontend.pages.CheckState" , compact('ReviewTow'));
    }
}
