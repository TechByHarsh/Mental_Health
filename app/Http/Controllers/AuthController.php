<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Models\User;

class AuthController extends Controller
{

    // Show regiter page 

    public function showRegister()
    {
         if(auth()->check()) {
        return redirect('/dashboard');
    }
       return response()
        ->view('Auth.Register')
        ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', '0');
    }

    // To Register User

    public function register(Request $request){

        // to validate the data enetered by user 
        $request->validate([
            'name' =>'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        // to create the user and put the users data in user table
        $user=User::create([
            'name'=> $request->name,
            'email'=> $request-> email,
            'password' => Hash::make($request-> password)
        ]);
        Mail::to($user->email)->send(new WelcomeMail($user));

        return redirect('/login')->with('success', 'Registration Successful');


    }

    // For Login Page
    
    public function showLogin()
    {
        if(auth()->check()) {
        return redirect('/dashboard');
    }
       
    return response()
        ->view('Auth.Login')
        ->header('Cache-Control', 'no-cache, no-store, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', '0');
    }

    // Login logic

    public function login(Request $request)
    {
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();
                $user = Auth::user();
               
                return redirect('/dashboard');

            }

        return back()->withErrors([
            'email' => 'Invalid Credentials'
        ]);

    }


    
        // Logout 

        public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    
   


}
