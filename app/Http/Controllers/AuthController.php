<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            // 'password' => Hash::make($request->password)
        ]);
        Auth::login($user);

        return redirect()->route('auth.dashboard');
    }


    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email'=>'Email ou password incorrect.',
        ])->onlyInput('email');

    }

    public function dashboard(){
        return view('auth.dashboard');
    }

    public function logout(Request $request) { 
        Auth::logout(); 
    
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
    
        return redirect()->route('auth.login'); 
    }  
}
