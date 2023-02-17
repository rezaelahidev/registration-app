<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showUserRegisterationForm()
    {
        return view('auth.registeration-form');
    }

    public function register(Request $request)
    {
        //validate
        $this->validationForm($request);

        $data = $request->all();

        //store user
        $user = User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'phone_number' => $data['phone_number'],
            ]
        );

        Auth::login($user);

        return redirect()->route('home')->with(['success' => true]);
    }

    protected function validationForm(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'max:8', 'confirmed'],
                'email' => ['required', 'string', 'max:255', 'unique:users'],
                'phone_number' => ['numeric', 'digits:11', 'nullable'],
            ]
        );
    }
}
