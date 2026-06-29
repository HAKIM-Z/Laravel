<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show_messages()
    {
        return view('dashboard.pages.messages');
    }
}
