<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Models\Property;
use App\Models\PropertyCondition;
use App\Models\PropertyType;
use App\Models\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function properties()
    {

        $properties = Property::limit(50)->get();

        return view('pages.listing', compact('properties'));
    }

    public function property( $slug, Property $property)
    {
        return view('pages.property', compact('property'));
    }

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
        $types = Type::all();
        $conditions = Condition::all();
        return view('pages.form', compact('types', 'conditions'));
    }
    public function registered()
    {

        return view('pages.user-registered');
    }
}
