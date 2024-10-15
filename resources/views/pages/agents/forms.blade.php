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
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="city" class="form-label">What city?*</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Tel Aviv">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                            <label for="street" class="form-label">What Street?*</label>
                            <input type="street" class="form-control" id="street" name="street"
                                placeholder="Bar Ilan">
                        </div>
                        <div class="col">
                            <label for="street_number" class="form-label">What Number?*</label>
                            <input type="email" class="form-control" id="street_number" placeholder="55">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app>
