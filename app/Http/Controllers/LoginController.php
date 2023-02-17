<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showUserLoginForm(Request $request)
    {
        return view('auth.login-form');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => ['string', 'required', 'email', 'exists:users'],
                'password' => ['required'],
            ]
        );

        if (!$this->attempLogin($request)) {

            return $this->sendLoginFailedResponse();
        }

        return $this->sendLoginSuccessResponse();
    }

    public function attempLogin(Request $request)
    {
        return
            Auth::attempt($request->only('email', 'password'), $request->filled('remember'));
    }

    protected function sendLoginSuccessResponse()
    {
        session()->regenerate();

        return redirect()->intended();
    }


    protected function sendLoginFailedResponse()
    {
        return back()->with(['failed' => true]);
    }

    public function logout()
    {
        session()->invalidate();

        Auth::logout();

        return redirect()->route('home');
    }
}
