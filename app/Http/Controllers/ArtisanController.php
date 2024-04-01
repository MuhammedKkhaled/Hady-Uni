<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function createStorageLink()
    {
          \Illuminate\Support\Facades\Artisan::call('storage:link');
               return "Link Created Successfully";    
    }
}
