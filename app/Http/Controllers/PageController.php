<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Models\Property;
use App\Models\Agency;
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
<<<<<<< HEAD
        $types = Type::all();
        $conditions = Condition::all();
=======
        $types = PropertyType::all();
        $conditions = PropertyCondition::all();
>>>>>>> f12a8268b26ee332f270c75fd1cd7b71e025c923
        return view('pages.form', compact('types', 'conditions'));
    }
    public function registered()
    {

        return view('pages.user-registered');
    }
<<<<<<< HEAD
=======
    public function afterListing()
    {

        return view('pages.after-listing');
    }
    public function agencyPage(?string $slug, Agency $agency)
    {
        $propertiesSells = $agency->propertiesListedFor('sell');
        $propertiesRents = $agency->propertiesListedFor('rent');
        return view('pages.agency', compact('agency', 'propertiesSells', 'propertiesRents'));
    }

>>>>>>> f12a8268b26ee332f270c75fd1cd7b71e025c923
}
