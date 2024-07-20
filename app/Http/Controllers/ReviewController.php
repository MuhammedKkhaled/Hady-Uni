<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(ReviewRequest $request)
    {

        $validated_data =  $request->validated();
        $id = Review::create($validated_data)->id;

        return redirect()
            ->back()
            ->with('message' , __('custom.doneSend'). $id);;
    }
    
    public function check(Request  $var)
    {
        $Review = Review::findOrFail($var->id);
        return view("frontend.pages.CheckState" , compact('Review'));
    }
}
