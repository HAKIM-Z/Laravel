<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show_messages()
    {
        $messages = Message::all();
        return view('dashboard.pages.messages', compact('messages'));
    }
}
