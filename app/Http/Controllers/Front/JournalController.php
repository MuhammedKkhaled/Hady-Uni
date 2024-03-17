<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function show()
    {
        $journal = Journal::latest()->first();

        return view("frontend.pages.journals" , compact('journal'));

    }

    public function showStrategies()
    {
        return view("frontend.pages.strategies");
    }

    public function showHeadTeacherWord()
    {
        return view("frontend.pages.HeadTeacher-Word");
    }


    public function showStructure()
    {
        return view("frontend.pages.structure");
    }

}
