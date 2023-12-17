<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function SignUp(){
        return view('Pages.Auth.auth-signup-basic');
    }
}
