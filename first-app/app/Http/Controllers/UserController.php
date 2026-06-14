<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show_view()
    {
        return view('users.view');
    }

    public function show_add()
    {
        return view('users.add');
    }

    public function insert(Request $request)
    {
        return $request;
    }

    public function show_edit($id)
    {
        return view('users.edit');
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
