<div class="step-form">
    <div class="row row-cols-1 row-cols-lg-2 " style="--bs-gutter-x: 50px;">
        <div class="">

            <div class="form-group row row-cols-md-1 row-cols-1 row-cols-lg-2 g-4">
                <div class="">
                    <label for="num_rooms" class="form-label">Number of rooms*</label>
                    <input type="text" class="form-control" id="num_rooms" placeholder="000">
                </div>
                <div class="">
                    <label for="surface_build" class="form-label">Surface build*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="surface_build" placeholder="000">
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
            </div>

            <div class="form-group row row-cols-md-1 row-cols-1 row-cols-lg-2 g-4">
                <div class="">
                    <label for="total_surface" class="form-label">Total Surface*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="total_surface" placeholder="000">
                        <span class="input-group-text">m²</span>
                    </div>
                </div>
                <div class="">
                    <label for="price" class="form-label">Price*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="price" placeholder="000">
                        <span class="input-group-text">NIS</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="entry_date" class="form-label">Entry date*</label>
                <input type="date" class="form-control" id="entry_date" placeholder="DD/MM/YY">
            </div>
            <div class="form-group row margin-top-15">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="immediately">
                        <label class="form-check-label" for="immediately">Immediately</label>
                    </div>

                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexible">
                        <label class="form-check-label" for="flexible">Flexible</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="property-details">

            <div class="form-group row row-cols-md-1 row-cols-1 row-cols-lg-2 g-4">
                <div class="">
                    <label class="form-label">Number of balcony*</label> <br>
                    <div class="btn-group" role="group" aria-label="Number of balcony">
                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_none"
                            value="none" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-20" for="balcony_none">None</label>

                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_1"
                            value="1" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-35" for="balcony_1">1</label>

                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_2"
                            value="2" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-35" for="balcony_2">2</label>

                        <input type="radio" class="btn-check" name="num_balcony" id="balcony_3_plus"
                            value="3+" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-30" for="balcony_3_plus">3+</label>
                    </div>
                </div>


                <div class="">
                    <label class="form-label">Ground/covered car park*</label> <br>
                    <div class="btn-group" role="group" aria-label="Ground/covered car park">
                        <input type="radio" class="btn-check" name="car_park" id="car_park_none"
                            value="none" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-20" for="car_park_none">None</label>

                        <input type="radio" class="btn-check" name="car_park" id="car_park_1"
                            value="1" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-35" for="car_park_1">1</label>

                        <input type="radio" class="btn-check" name="car_park" id="car_park_2"
                            value="2" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-35" for="car_park_2">2</label>

                        <input type="radio" class="btn-check" name="car_park" id="car_park_3_plus"
                            value="3+" autocomplete="off">
                        <label class="btn btn-outline-dark padding-x-30" for="car_park_3_plus">3+</label>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="mb-3 additional-property-details">
                    <label class="form-label">More about the property*</label>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="access_disabled"
                                autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="access_disabled">
                                <img src="{{ asset('assets/images/attributes/wheelchair.svg') }}"
                                    alt="">
                                Access for disabled
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="elevators" autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="elevators">
                                <img src="{{ asset('assets/images/attributes/elevetors.svg') }}"
                                    alt="">
                                Elevators
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="renovated" autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="renovated">
                                <img src="{{ asset('assets/images/attributes/renovator.svg') }}"
                                    alt="">
                                Renovated
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="air_conditioner"
                                autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="air_conditioner">
                                <img src="{{ asset('assets/images/attributes/air-conditionner.svg') }}"
                                    alt=""> Air conditioner
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="furnitures_included"
                                autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="furnitures_included">
                                <img src="{{ asset('assets/images/attributes/furniture.svg') }}"
                                    alt="">
                                Furnitures included
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="mamad" autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="mamad">
                                <img src="{{ asset('assets/images/attributes/mamad.svg') }}"
                                    alt=""> Mamad
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="bars" autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="bars">
                                <img src="{{ asset('assets/images/attributes/bars.svg') }}"
                                    alt=""> Bars
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="unit" autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="unit">
                                <img src="{{ asset('assets/images/attributes/unit.svg') }}"
                                    alt=""> Unit
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="personal_mazgan"
                                autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="personal_mazgan">
                                <img src="{{ asset('assets/images/attributes/mazgan.svg') }}"
                                    alt="">
                                Personal Mazgan
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="water_heater"
                                autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="water_heater">
                                <img src="{{ asset('assets/images/attributes/heater.svg') }}"
                                    alt="">
                                Water heater
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="kosher_kitchen"
                                autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="kosher_kitchen">
                                <img src="{{ asset('assets/images/attributes/kosher.svg') }}"
                                    alt="">
                                Kosher kitchen
                            </label>
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="checkbox" class="btn-check" id="storage" autocomplete="off">
                            <label
                                class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start"
                                for="storage">
                                <img src="{{ asset('assets/images/attributes/storage.svg') }}"
                                    alt="">
                                Storage
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>