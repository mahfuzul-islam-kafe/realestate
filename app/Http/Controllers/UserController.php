<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function notification()
    {
        return view('pages.user.notification');
    }
}
