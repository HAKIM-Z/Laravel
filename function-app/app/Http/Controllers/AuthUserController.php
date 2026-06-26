<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function register_form()
    {
        return view('ecomm.pages.auth.register');
    }

    public function register_data(Request $request) {}

    public function login_form() {}

    public function login_check(Request $request) {}

    public function logout() {}
}
