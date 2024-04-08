<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Library;
use App\Models\Sustainable;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function show($id)
    {

        $category = Category::findOrFail($id);
        $libraries = Library::where('category_id' , $id )->get();

        return view('frontend.pages.libraries' ,compact('libraries' , 'category'));

    }
    
    public function showsustainable($id)
    {

        $category = Category::findOrFail($id);
        $libraries = Sustainable::where('category_id' , $id )->get();

        return view('frontend.pages.sustainable' ,compact('libraries' , 'category'));

    }
}
