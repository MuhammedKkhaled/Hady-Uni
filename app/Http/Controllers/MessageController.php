<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(MessageRequest $request)
    {

     $validated_data =  $request->validated();

     Message::create($validated_data);

     return redirect()
         ->back()
         ->with('message' , __('custom.frontend.messages') );
    }
}
