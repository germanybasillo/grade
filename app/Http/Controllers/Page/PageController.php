<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    
    function dashboard()
    {
        if(Auth::check())
        {
            return redirect('/dashboard')->with('info', "Please logout first");
        }

        return redirect('/login')->with('fail', "pag create sa og account sumbagon konang baba nimo ron");
    }

    function index()
    {
        if(Auth::check())
        {
            return redirect('/dashboard')->with('info', "Please logout first");
        }

        return redirect('/login')->with('fail', "pag create sa og account sumbagon konang baba nimo ron");
    }
}