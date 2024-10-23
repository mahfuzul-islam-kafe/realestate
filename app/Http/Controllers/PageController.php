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
        $types = Type::all();
        $conditions = Condition::all();
        return view('pages.form', compact('types', 'conditions'));
    }
    public function registered()
    {

        return view('pages.user-registered');
    }
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

    public function rentOut(){
        return view('pages.rent-out');
    }
    public function saleOut(){
        return view('pages.sale-out');
    }
}
