<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }

    public function prosesLogin(Request $request){
        request()->validate([
            'username' => 'required',
            'password' => 'required', 
        ]);

        $kredensil = $request->only('username', 'password');

        if(Auth::attempt($kredensil)){
            $user = Auth::user();
            
            if($user->level == 'admin'){
                return redirect()->intended('admin');
            } elseif($user->level == 'user'){
                return redirect()->intended('/');
            }

            return redirect()->intended('/');
        };
        return redirect('login');
    }
}
