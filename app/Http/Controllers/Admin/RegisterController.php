<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Services\UserServices;

class RegisterController extends Controller
{
    protected $user;

    public function __construct(UserServices $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('Admin.User.register', ['title' => 'Register']);
    }

    public function create(RegisterRequest $request)
    {
        $result = $this->user->insert($request);

        if ($result) {
            return redirect()->route('login')->with('success', 'Register Success');
        } else {
            return redirect()->back()->with('error', 'Register Failed');
        }
    }
}
