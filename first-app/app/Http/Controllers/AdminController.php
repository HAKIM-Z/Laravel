<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.view');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => "required|string|min:3",
            "email" => "required|string|email|unique:users,email",
            "password" => "required|min:6",
            "age" => "required|integer|between:18,60",
            "phone" => "required|numeric|starts_with:+20"
        ]);

        return $request;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admins.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "$id deleted";
    }
}
