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

    public function show_edit($id)
    {
        return view('User.edit');
    }

    public function update(Request $request, $id)
    {
        return $request;
    }

    public function delete($id)
    {
        return "$id deleted";
    }
}
