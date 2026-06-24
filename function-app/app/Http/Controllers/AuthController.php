<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show_form()
    {

        return view('dashboard.pages.auth.login');
    }

    public function login_check(Request $request)
    {
        if (Auth::guard('dash')->attempt($request->except('_token'))) {
            return to_route('dash.index');
        } else {
            return to_route('login.form');
        }
    }

    public function logout()
    {
        Auth::guard('dash')->logout();
        return to_route('login.form');
    }
}
