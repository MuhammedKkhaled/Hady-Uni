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
}
