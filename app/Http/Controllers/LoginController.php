<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showUserLoginForm(Request $request)
    {


        return view('auth.login-form');
    }
}
