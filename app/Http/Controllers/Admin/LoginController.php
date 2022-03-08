<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin.User.login', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput()->withErrors([
                'email' => 'Email or password is invalid',
            ]);
        }
    }
}
