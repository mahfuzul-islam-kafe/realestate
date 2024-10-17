<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function notification()
    {
        return view('pages.user.notification');
    }
    public function profile()
    {
        return view('pages.user.profile');
    }
}
