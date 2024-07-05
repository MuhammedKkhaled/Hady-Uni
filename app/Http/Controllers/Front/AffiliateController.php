<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Curricula;
use App\Models\Library;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function show($id)
    {
        $affiliates = Affiliate::where('department_id' , $id)->get();

        return view('frontend.pages.affiliates' , compact('affiliates'));
    }
    public function showaffiliate($id){
        
        $affiliate = Affiliate::findOrFail($id);

        $curriculas = Curricula::where('affiliate_id', $id)->get();
        $libraries = Library::where('affiliate_id', $id)->get();

        return view("frontend.pages.affiliate-details" , compact('affiliate' ,'curriculas','libraries'));

    }
}
