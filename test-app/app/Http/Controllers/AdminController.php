<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.view');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|string",
            "email" => "required|string|email|unique:users,email",
            "password" => "required|min:6",
            "phone" => "required|starts_with:+20|numeric",
            "age" => "required|numeric|between:18,60"
        ]);

        DB::table('admins')->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "phone" => $request->phone,
            "age" => $request->age,
            "gender" => $request->gender
        ]);

        return to_route('admin.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Admin.edit');
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
