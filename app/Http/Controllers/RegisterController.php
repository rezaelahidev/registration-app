<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showUserRegisterationForm()
    {
        return view('auth.registeration-form');
    }
}
