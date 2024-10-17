<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\PropertyCondition;
use App\Models\PropertyType;
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
    public function form()
    {
        $types = PropertyType::all();
        $conditions = PropertyCondition::all();
        return view('pages.form', compact('types', 'conditions'));
    }
    public function registered()
    {

        return view('pages.user-registered');
    }
    public function agencyPage(?string $slug, Agency $agency)
    {
        return view('pages.agency', compact('agency'));
    }
}
