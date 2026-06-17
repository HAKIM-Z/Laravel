<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function show_view()
    {
        return view('User.view');
    }

    public function show_form()
    {
        return view('User.add');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
