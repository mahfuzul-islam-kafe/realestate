<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginAsAgent()
    {
        return view('auth.loginAsAgent');
    }
    public function registerAsAgent()
    {
        return view('auth.registerAsAgent');
    }
}
