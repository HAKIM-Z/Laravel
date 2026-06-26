<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function register_form()
    {
        return view('ecomm.pages.auth.register');
    }

    public function register_data(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:3",
            "email" => "required|email|unique:users,email|unique:admins,email",
            "password" => "required|min:6|same:confirm"
        ]);

        User::create($request->except('_token', 'confirm'));

        return to_route('user.login.form');
    }

    public function login_form()
    {
        return view('ecomm.pages.auth.login');
    }

    public function login_check(Request $request)
    {
        if (Auth::guard('web')->attempt($request->except('_token'))) {
            return to_route('web.index');
        } else {
            return to_route('user.login.form');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return to_route('user.login.form');
    }
}
