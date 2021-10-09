<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authCheck(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials))
        {
            return redirect()->intended('/');
        }
        return redirect()->back()
            ->withInput($request->only('username'))
            ->with('error', 'Username or Password was invalid.');
        
    } 
     
    public function logout()
    {
        Auth::logout();
        return back();
    }
}
