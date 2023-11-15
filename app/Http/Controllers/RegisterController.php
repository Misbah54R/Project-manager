<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'], 
            'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/', 'confirmed'],
      
        ]);

        try {
            User::create($attributes);
            return redirect()->route('welcome');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('message','Please try again');
            session()->flash('status','danger');
               return redirect()->back();  
        }
    }
}
