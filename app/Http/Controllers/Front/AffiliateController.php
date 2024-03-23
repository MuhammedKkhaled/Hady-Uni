<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function show($id)
    {
        $affiliates = Affiliate::where('department_id' , $id)->get();

        return view('frontend.pages.affiliates' , compact('affiliates'));
    }
}
