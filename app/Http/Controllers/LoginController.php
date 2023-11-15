<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request )
    {
        $attributes = $request->validate([
          
                'email' => ['required', 'email'], 
                'password' => ['required']
            ]);
            if (Auth::attempt($attributes)){
                $request->session()->regenerate();
                return redirect()->route('welcome');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
     
            ])->onlyInput('email');
    }
    
}
