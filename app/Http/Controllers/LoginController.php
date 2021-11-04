<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function halamanLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return view('/index');
        }
        // else{
        //     session()->flash('error', 'Invalid Credential');
            
        // }
        return redirect('/login')->with('message','Username atau Password salah');
    }
}
