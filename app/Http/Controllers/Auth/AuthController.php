<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard')->with('info', "Please logout first");
        }
        return view('auth.login');
    }

    function register()
    {
        if (Auth::check()) {
            return redirect('/dashboard')->with('info', "Please logout first");
        }
        return view('auth.register');
    }

    function validate_register(Request $request)
{
    $request->validate([
        'name'         =>   'required',
        'email'        =>   'required|email|unique:users',
        'password'     =>   'required|min:6'
    ]);

    $data = $request->all();

    $user = User::create([
        'name'  =>  $data['name'],
        'email' =>  $data['email'],
        'password' => Hash::make($data['password'])
    ]);

    Auth::login($user);
    return redirect('/dashboard')->with('success', "Welcome, $user->name!");
}


function validate_login(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');
    
    if(Auth::attempt($credentials))
    {
        $user = Auth::user();
        return redirect('/dashboard')->with('success', "Welcome back, $user->name!");
    }

    return redirect('/login')->with('error', 'Login details are not valid');
    }

    function logout()
    {
        $user = Auth::user();
        Session::flush();
        Auth::logout();
        if ($user) {
            return redirect('/login')->with('success', "You can come back anytime anywhere, $user->name!");
        } 
    }
}
