<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    
    public function Logout(){
        
        return view('Pages.Auth.auth-logout-cover');
    }



     /* Logout function */
    // function LogoutDestroy(){
    //     Session::flush();
    //     return redirect(route('logout'));
    // }
}
