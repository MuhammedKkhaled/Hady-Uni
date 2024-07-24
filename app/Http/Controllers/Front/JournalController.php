<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Classifications;
use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function show()
    {
        $journal = Journal::latest()->first();

        return view("frontend.pages.journals", compact('journal'));
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

    public function showclassifications($id)
    {
        $classification = Classifications::where('id', 1)->get();
        switch ($id) {
            case 1:
                return response()->file('storage/uploads/classifications/' . $classification[0]->webometrics);
                break;
            case 2:
                return response()->file('storage/uploads/classifications/' . $classification[0]->greenmetrics);
                break;
            case 3:
                return response()->file('storage/uploads/classifications/' . $classification[0]->scopus);
                break;
            case 4:
                return response()->file('storage/uploads/classifications/' . $classification[0]->scival);
                break;
            default:
                # code...
                break;
        }
    }
}
