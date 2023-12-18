<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignUpController extends Controller
{
    public function SignUp(){
        return view('Pages.Auth.auth-signup-basic');
    }
    public function SignUpPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
        ]);

       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['password']=Hash::make($request->password);

       $user=User::create($data);

       if(!$user){
           return redirect(route('sign-up'))->with('error', 'Ragistration Failed!, plase try again.');
        }else{
            return redirect(route('home'))->with('success', 'Login is Done!');
        }
    }  
    
    
}
