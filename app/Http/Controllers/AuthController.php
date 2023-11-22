<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\session;
//meng import

class AuthController extends Controller
{
    public function login()  
    {
        return view('login');
    }

    public function authenticating(Request $request)  
    {
        //validasi
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) { // Mencoba melakukan otentikasi  
            $request->session()->regenerate(); // Regenerasi ID sesi setelah otentikasi berhasil
 
            //lari ke page
            return redirect()->intended('/students');
        }

        //pesan
         session::flash('status','failed');
         session::flash('mesage', 'login salah');

         return redirect('/login');
    }

    public function logout( request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();  // Mengakhiri sesi pengguna dengan menghapus semua data sesi
        $request->session()->regenerateToken(); // Menghasilkan token CSRF yang baru
        return redirect('/students');

    }
}
