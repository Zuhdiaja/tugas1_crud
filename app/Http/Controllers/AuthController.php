<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\session;


class AuthController extends Controller
{
    public function login()  
    {
        return view('login');
    }

    public function authenticating(Request $request)  
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/students');
        }

         session::flash('status','failed');
         session::flash('mesage', 'login salah');

         return redirect('/login');
    }

    public function logout( request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/students');

    }
}
