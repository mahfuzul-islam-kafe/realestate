<div class="step-form">
    <div class="row row-cols-1 row-cols-lg-2 " style="--bs-gutter-x: 100px;">
        <div class="">

            <div class="form-group">
                <label for="inputState" class="form-label">What type of property ?*</label>
                <select id="inputState" class="form-select">
                    <option selected><span> <img src="{{ asset('assets/images/attributes/home.svg') }}"
                                class="margin-right-10">House</span>
                    </option>
                    <option><img src="{{ asset('assets/images/attributes/home.svg') }}"
                            class="margin-right-10">Apartment</option>
                </select>
            </div>

            <div class="form-group">
                <label for="city" class="form-label">What city?*</label>
                <input type="text" class="form-control" id="city" name="city"
                    placeholder="Tel Aviv">
            </div>

            <div class="form-group">
                <label for="floors" class="form-label">How many floors*</label>
                <div class="row align-items-center">

                    <div class="col">
                        <input type="number" class="form-control" id="floors" placeholder="1">
                    </div>
                    <span class="w-auto">on</span>
                    <div class="col">
                        <input type="number" class="form-control" id="street_number" placeholder="12">
                    </div>
                </div>
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="gridCheck" checked>
                <label class="form-check-label" for="gridCheck">
                    Ground floor
                </label>
            </div>
        </div>
        <div class="">

            <div class="form-group">
                <label for="inputState" class="form-label">What type of property ?*</label>
                <select id="inputState" class="form-select">
                    <option selected><span> <img src="{{ asset('assets/images/attributes/home.svg') }}"
                                class="margin-right-10">House</span>
                    </option>
                    <option><img src="{{ asset('assets/images/attributes/home.svg') }}"
                            class="margin-right-10">Apartment</option>
                </select>
            </div>
            <div class=" form-group row gutter-60">
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

            <div class="form-group">
                <label for="area" class="form-label">Area*</label>
                <select id="inputState" class="form-select">
                    <option selected>South Est</option>
                    <option>...</option>
                </select>
            </div>
        </div>
    </div>



</div>