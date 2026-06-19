<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Psy\Command\WhereamiCommand;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('Admin.view');

        $admins = DB::table('admins')->get();

        return view('Admin.view', compact('admins'));
        // ->where('id', 2)
        // ->orWhere('name', 'ali mohamed ali')
        // ->get(['name', 'gender']);
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
        $admin = DB::table('admins')->find($id);

        return view('Admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            "name" => "required|min:3|string",
            "email" => "required|string|email|unique:users,email",
            "phone" => "required|starts_with:+20|numeric",
            "age" => "required|numeric|between:18,60"
        ]);

        DB::table('admins')->where('id', $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "age" => $request->age,
            "gender" => $request->gender
        ]);

        return to_route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('admins')->where('id', $id)->delete();
        return to_route('admin.index');
    }
}
