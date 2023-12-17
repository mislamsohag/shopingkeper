<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(){
        return view('Pages.Auth.auth-signin-basic');
    }

    public function LoginPost(Request $request){
        // dd($request);
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $credentials=$request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Login details are not valid');
    }
}
