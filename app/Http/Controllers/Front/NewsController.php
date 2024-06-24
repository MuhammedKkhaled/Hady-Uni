<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Conference;
use App\Models\NewsGallery;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all()->reverse();
        return view("frontend.pages.new" , compact('news'));

    }
    public function showconferences()
    {
        $Conferences = Conference::all()->reverse();
        return view("frontend.pages.Conference" , compact('Conferences'));

    }
    public function showone($id)
    {

        $sustainable =  News::findOrFail($id);
        $galleries = NewsGallery::where('department_id', $id)->get();

        return view("frontend.pages.onenews", compact('sustainable','galleries'));
    }


}
