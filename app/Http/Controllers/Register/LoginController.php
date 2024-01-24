<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    
    {
       
        return view('auth.login-form');
    }

    public function store(Login $request){
        
        $login=$request->only('email','password');
        
        if(auth::attempt($login)){
            auth::login(auth::user());
            
            return redirect()->route('user.dashboard.index',compact('user'));
        }
        else{
            return redirect()->back()->withErrors('ایمیل و پسورد اشتباه است.');
        }
    }
}
