<x-layout.publish>
    <div x-cloak class="steps" x-data="{
        currentStep: new URL(window.location.href).searchParams.get('step') ?? 1,
        nextStep: step => {
            $data.currentStep = step;
            history.pushState(null, null, window.location.pathname + '?step=' + $data.currentStep)
        }
    }">

        <div class="step" x-show="currentStep == 1">
            <h1 class="step-title">
                <strong>Step 1 </strong> - <span>Property's address</span>
            </h1>
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
            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark"> <i class="fa fa-chevron-left"></i> Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(2)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="step" x-show="currentStep == 2">
            <h1 class="step-title">
                <strong>Step 2 </strong> - <span>About the property</span>
            </h1>
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
            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark" x-on:click="nextStep(1)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(3)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="step" x-show="currentStep == 3">
            <h1 class="step-title">
                <strong>Step 3 </strong> - <span>Description</span>
            </h1>
            <div class="step-form">
                <div class="row row-cols-1 ">
                    <div class="margin-top-50">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fs-18">Description of the
                                property*</label>
                            <div class="d-flex justify-content-between align-items-center fs-13 margin-bottom-11">
                                <span>Did you know: an ad without a description hardly gets any calls</span>
                                <span>0/400</span>
                            </div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="height: 330px"></textarea>
                        </div>

                    </div>

                </div>
            </div>
            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark" x-on:click="nextStep(2)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(4)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="step" x-show="currentStep == 4">
            <h1 class="step-title">
                <strong>Step 4 </strong> - <span>Photos and videos</span>
            </h1>
            <div class="step-form">
                <div class="row row-cols-1 ">
                    <div class="margin-top-50">
                        <div class="upload">
                            <label for="formFile" class="form-label">You have nothing to worry about, in the gallery
                                the image
                                will
                                appear in its original size* 0/10</label>
                            <div class="upload-area">
                                <div class="upload-content">
                                    <div class="icon-container">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <p>Drag here images and videos</p>
                                    <input type="file" class="file-input" accept="image/*, video/*" multiple />
                                    <div class="delete-icon">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upload-link margin-top-40">
                            <div class="">
                                <label for="upload-link" class="form-label fs-18" style="color: #1D234E">If you have
                                    a link for
                                    the Matterport 3D
                                    view, you can attach it to showcase the 3D view in the property gallery</label>
                                <input type="text" class="form-control" id="upload-link" placeholder="https://">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="step-footer d-flex justify-content-between margin-top-70">
                <button class="btn btn-outline-dark" x-on:click="nextStep(3)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" x-on:click="nextStep(5)"> Next <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="step" x-show="currentStep == 5">
            <h1 class="step-title">
                <strong>Step 5 </strong> - <span>Contact Information</span>
            </h1>
            <div class="step-form">
                <div class="row row-cols-1 row-cols-lg-2 " style="--bs-gutter-x: 50px;">
                    <div class="">

                        <div class="form-group">
                            <label for="name" class="form-label">Your name?*</label>
                            <input type="text" class="form-control" id="name" placeholder="David" required>

                        </div>
                        <div class="form-group margin-top-30">

                            <a href="#" class="text-decoration-none fs-18"
                                style="color: rgba(29, 35, 78, 0.8)">
                                <i class="fa-solid fa-circle-plus"></i> Add another contact
                            </a>

                        </div>
                        <div class="form-check margin-y-40">
                            <input type="checkbox" class="form-check-input" id="advertisingMail" required>
                            <label class="form-check-label label-style" for="advertisingMail">
                                I confirm the receipt of advertising mail related to the ad I published on the Kemea
                                website
                            </label>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group ">
                            <label for="phone" class="form-label">At what number can those interested reach you?
                                *</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <img src="https://flagcdn.com/w20/il.png" alt="Country Flag">

                                </span>

                                <input type="tel" class="form-control" id="phone" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group margin-top-90">
                            <input type="checkbox" class="form-check-input" id="terms" required>
                            <label class="form-check-label label-style" for="terms">
                                I have read and agreed to the <a href="#"
                                    class="text-decoration-underline">Terms &
                                    Conditions</a>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="updates">
                    <label class="form-check-label label-style" for="updates">
                        I would love to receive updates, publications, suggestions or tips regarding the Kemea
                        bulletin board
                    </label>
                </div>
            </div>
            <div class="step-footer d-flex justify-content-between">
                <button class="btn btn-outline-dark" x-on:click="nextStep(4)"> <i class="fa fa-chevron-left"></i>
                    Back</button>
                <button class="btn btn-dark" type="submit"> Send <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>


</x-layout.publish>
