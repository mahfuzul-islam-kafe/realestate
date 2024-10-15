<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function formSubmit(Request $request)
    {

// dd($request->all());
        $data = new Property;
        $data->property_type = $request->property_type;
        $data->name = $request->name;
        $data->number = $request->number;
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
        $data->air_conditionner = $request->air_conditionner ? 1 : 0;
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
        $data->property_condition = $request->property_condition;
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
}
