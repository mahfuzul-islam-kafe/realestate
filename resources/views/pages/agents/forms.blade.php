<x-app>
    <div class="container p-5 ">
        <div class="step-1 mb-3" x-data="{ property: null }">
            <label :class="property === 'sell' ? 'ads-type selected' : 'ads-type'">
                <input type="radio" x-model="property" name="property" value="sell">
                <div class="text-center">
                    <img src="{{ asset('assets/images/attributes/home.svg') }}">
                    <p>I want to sell a property</p>
                </div>
            </label>

            <label :class="property === 'rent' ? 'ads-type selected' : 'ads-type'">
                <input type="radio" x-model="property" name="property" value="rent">
                <div class="text-center">
                    <img src="{{ asset('assets/images/attributes/building.svg') }}">
                    <p>I want to rent a property</p>
                </div>
            </label>
        </div>

        <div class="step-2">
            <div class="row g-3 margin-bottom-40">
                <div class="col">
                    <label for="inputState" class="form-label">What type of property ?*</label>
                    <select id="inputState" class="form-select">
                        <option selected><span> <img src="{{ asset('assets/images/attributes/home.svg') }}"
                                    class="margin-right-10">House</span>
                        </option>
                        <option><img src="{{ asset('assets/images/attributes/home.svg') }}"
                                class="margin-right-10">Apartment</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">State of the property*</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="row gutter-110 margin-bottom-40">
                <div class="col-md-6">
                    <label for="city" class="form-label">What city?*</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Tel Aviv">
                </div>
                <div class="col-md-6">
                    <div class="row gutter-60">
                        <div class="col">
                            <label for="street" class="form-label">What Street?*</label>
                            <input type="text" class="form-control" id="street" name="street"
                                placeholder="Bar Ilan">
                        </div>
                        <div class="col">
                            <label for="street_number" class="form-label">What Number?*</label>
                            <input type="number" class="form-control" id="street_number" placeholder="55">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-110  margin-bottom-40">
                <div class="col-md-6">
                    <label for="floors" class="form-label">How many floors*</label>
                    <div class="row align-items-center">

                        <div class="col-auto">
                            <input type="number" class="form-control" id="floors" placeholder="1">
                        </div>
                        <span class="w-auto">on</span>
                        <div class="col-auto">
                            <input type="number" class="form-control" id="street_number" placeholder="12">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <label for="area" class="form-label">Area*</label>
                    <select id="inputState" class="form-select">
                        <option selected>South Est</option>
                        <option>...</option>
                    </select>
                </div>

            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Ground floor
                    </label>
                </div>
            </div>
        </div>
        <div class="step-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="num_rooms" class="form-label">Number of rooms*</label>
                    <input type="text" class="form-control" id="num_rooms" placeholder="000">
                </div>
                <div class="col">
                    <label for="surface_build" class="form-label">Surface build*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="surface_build" placeholder="000">
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label">Number of balcony*</label>
                    <div class="btn-group" role="group" aria-label="Number of balcony">
                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_none" value="none"
                            autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-20" for="balcony_none">None</label>

                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_1" value="1"
                            autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-35" for="balcony_1">1</label>

                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_2" value="2"
                            autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-35" for="balcony_2">2</label>

                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_3_plus"
                            value="3+" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-30" for="balcony_3_plus">3+</label>
                    </div>
                </div>


                <div class="col">
                    <label class="form-label">Ground/covered car park*</label>
                    <div class="ads-type">
                        <input class="form-check-input" type="radio" name="car_park" id="car_park_none"
                            value="none">
                        <label class="form-check-label" for="car_park_none">None</label>
                    </div>
                    <div class="ads-type">
                        <input class="form-check-input" type="radio" name="car_park" id="car_park_1"
                            value="1">
                        <label class="form-check-label" for="car_park_1">1</label>
                    </div>
                    <div class="ads-type">
                        <input class="form-check-input" type="radio" name="car_park" id="car_park_2"
                            value="2">
                        <label class="form-check-label" for="car_park_2">2</label>
                    </div>
                    <div class="ads-type">
                        <input class="form-check-input" type="radio" name="car_park" id="car_park_3_plus"
                            value="3+">
                        <label class="form-check-label" for="car_park_3_plus">3+</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="total_surface" class="form-label">Total Surface*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="total_surface" placeholder="000">
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
                <div class="col">
                    <label for="price" class="form-label">Price*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="price" placeholder="000">
                        <span class="input-group-text">NIS</span>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="entry_date" class="form-label">Entry date*</label>
                <input type="text" class="form-control" id="entry_date" placeholder="DD/MM/YY">
            </div>

            <div class="mb-3">
                <label class="form-label">More about the property*</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="access_disabled">
                    <label class="form-check-label" for="access_disabled">Access for disabled</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="elevators">
                    <label class="form-check-label" for="elevators">Elevators</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="renovated">
                    <label class="form-check-label" for="renovated">Renovated</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="air_conditioner">
                    <label class="form-check-label" for="air_conditioner">Air conditioner</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="furnitures_included">
                    <label class="form-check-label" for="furnitures_included">Furnitures included</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="bars">
                    <label class="form-check-label" for="bars">Bars</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="unit">
                    <label class="form-check-label" for="unit">Unit</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="mamad">
                    <label class="form-check-label" for="mamad">Mamad</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="personal_mazgan">
                    <label class="form-check-label" for="personal_mazgan">Personal Mazgan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="water_heater">
                    <label class="form-check-label" for="water_heater">Water heater</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="kosher_kitchen">
                    <label class="form-check-label" for="kosher_kitchen">Kosher kitchen</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="storage">
                    <label class="form-check-label" for="storage">Storage</label>
                </div>
            </div>

            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="immediately">
                    <label class="form-check-label" for="immediately">Immediately</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="flexible">
                    <label class="form-check-label" for="flexible">Flexible</label>
                </div>
            </div>
        </div>

    </div>

</x-app>
