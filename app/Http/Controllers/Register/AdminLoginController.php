<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function index()
    {
        return view('auth.login-admin');
    }

    public function login(AdminLoginRequest $request)
    {
        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {
            Auth::login(Auth::user());
            return redirect()->route('admin.index',compact('user'));
        } else {
            return redirect()->back()->withErrors('ایمیل یا پسورد اشتباه است.');
        }
    }
}
