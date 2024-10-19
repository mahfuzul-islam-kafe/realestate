<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AgentController extends Controller
{
    public function rentProperty(){
        $types = Type::all();
        $conditions = Condition::all();
        return view('pages.agents.rent-your-property',compact('conditions', 'types'));
    }
    public function createProperty(Request $request)
    {

        $data = new Property;

        $data->agency_id  = 1;
        $data->listed_for = 'rent';
        $data->type_id = $request->type_id;
        // $data->name = $request->name;
        // $data->number = $request->number;
        $data->property_description = $request->property_description;
        $data->total_surface = $request->total_surface;
        $data->surface_build = $request->surface_build;
        $data->garden_surface = $request->garden_surface;
        $data->payments = $request->payments;
        $data->arnona_for_2_months = $request->arnona_for_2_months;
        $data->house_vaad = $request->house_vaad;
        $data->total_floor = $request->total_floor;
        $data->sell_floor = $request->sell_floor;
        $data->rooms_count = $request->rooms_count;
        $data->access_for_disabled = $request->access_for_disabled ? 1 : 0;
        $data->elevators = $request->elevators ? 1 : 0;
        $data->renovated = $request->renovated ? 1 : 0;
        $data->air_conditioner = $request->air_conditioner ? 1 : 0;
        $data->furnitures_included = $request->furnitures_included ? 1 : 0;
        $data->mamad = $request->mamad ? 1 : 0;
        $data->bars = $request->bars ? 1 : 0;
        $data->unit = $request->unit ? 1 : 0;
        $data->personal_mazgan = $request->personal_mazgan ? 1 : 0;
        $data->water_heater = $request->water_heater ? 1 : 0;
        $data->kosher_kitchen = $request->kosher_kitchen ? 1 : 0;
        $data->storage = $request->storage ? 1 : 0;
        $data->sell_entry_date = $request->sell_entry_date;
        $data->rent_entry_date = $request->rent_entry_date;
        $data->city = $request->city;
        $data->balcony_count = $request->balcony_count;
        $data->carpark_count = $request->carpark_count;
        $data->ground_floor = $request->ground_floor ? 1 : 0;
        $data->street = $request->street;
        $data->street_number = $request->street_number;
        $data->area = $request->area;
        $data->matterport_link = $request->matterport_link;
        $data->condition_id = $request->condition_id;
        $data->immediately = $request->immediately;
        $data->immediately = $request->immediately ? 1 : 0;
        $data->flexible = $request->flexible ? 1 : 0;
        $data->long_term = $request->long_term ? 1 : 0;
        $data->is_mailable = $request->is_mailable ? 1 : 0;
        $data->is_suggestible = $request->is_suggestible ? 1 : 0;
        $data->price = $request->price;

        // Save the data
        $data->save();
        return redirect()->back();
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'agent') {
                return redirect()->intended('/agent/dashboard')
                    ->with('success', 'Welcome back, ' . $user->name . '!');
            } else {
                Auth::logout();
                return redirect()->route('login')
                    ->withErrors(['email' => 'Access denied. Only agents can log in here.']);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'license_number' => 'required|string|max:255|unique:users,license_number',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $nameParts = explode(' ', $request->input('name'), 2);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : '';
        $user = User::create([
            'company_name' => $request->input('company_name'),
            'name' => $firstName,
            'last_name' => $lastName,
            'role' => 'agent',
            'license_number' => $request->input('license_number'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone_number' => $request->input('phone_number'),
            'receive_communications' => $request->input('receive_communications', false), // Default to false if not checked
        ]);
        Auth::login($user);
        return redirect()->route('agent.dashboard')->with('success', 'Registration successful!');
    }
    public function dashboard()
    {

        return view('pages.agents.dashboard');
    }
}
