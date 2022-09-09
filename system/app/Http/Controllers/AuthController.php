<?php

namespace App\Http\Controllers;
use Auth;


class AuthController extends Controller
{
 
    function showLogin(){
        return view('frontview.login');
    }
    
    function Loginprocess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('dashboard')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function Logout(){
        Auth()->logout();
        return redirect('login');
    }
   
}
