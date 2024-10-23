<x-app>

    <div class="container">
        <section class="row ">
            <div class="col-md-7 ">
                <div class="margin-left-100" style="margin-top: 130px">
                    <div class="fw-600 fs-57">
                        Are you owners and <br> want to rent your home ?
                    </div>
                    <div class="fw-300 fs-25 margin-top-40">
                        Answer a form with some quick questions and <br> we will get back to you in a brief delay
                    </div>
                    <button class="btn btn-primary rounded-pill margin-top-45">
                        <div class="fs-22 padding-y-16 padding-x-50">Get Started <i class="fa fa-chevron-right"></i></div>
                    </button>
                    <div class="d-flex gap-1 ms-2 margin-top-15">
                        <i class="fa-solid fa-stopwatch"></i>
                        <div class="fs-12">takes less than a minute</div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/rent-out.png') }}" alt=""
                    class="margin-top-63 margin-bottom-87 margin-left-58">
            </div>
        </section>

        <section class="row ">
            <div class="col-md-7 ">
                <div class="margin-left-100" style="margin-top: 130px">
                    <div class="step-form">
                        <div class="row row-cols-1 row-cols-lg-2 " style="--bs-gutter-x: 50px;">
                            <div class="">

                                <div class="form-group">
                                    <label for="total_surface" class="form-label">Where is it located ?*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="total_surface"
                                            name="total_surface">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="total_surface" class="form-label">Total Surface*</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="total_surface" placeholder="000"
                                            name="total_surface">
                                        <span class="input-group-text">m²</span>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="total_surface" class="form-label">What type of property is it?*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="total_surface"
                                            name="total_surface">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputState" class="form-label">Number of payments*</label>
                                    <select id="inputState" class="form-select" name="payments">
                                        <option selected><span>0</span></option>
                                        <option><span>1</span></option>
                                        <option><span>2</span></option>

                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="form-group my-4">
                            <label for="total_surface" class="form-label">What is the desired rent ?*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="total_surface" name="total_surface">

                            </div>
                        </div>
                    </div>
                    <div class="step-footer d-flex justify-content-between">
                        <button class="btn btn-outline-dark"> <i class="fa fa-chevron-left"></i> Back</button>
                        <button class="btn btn-dark" x-on:click="nextStep(2)"> Next <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/rent-out.png') }}" alt=""
                    class="margin-top-63 margin-bottom-87 margin-left-58">
            </div>
        </section>
        <section class="row ">
            <div class="col-md-7 ">
                <div class="margin-left-100" style="margin-top: 130px">
                    <div class="step-form">
                        <div class="row row-cols-1 row-cols-lg-2 " style="--bs-gutter-x: 50px;">
                            <div class="">

                                <div class="form-group">
                                    <label for="total_surface" class="form-label">What is your name?*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="total_surface"
                                            name="total_surface">

                                    </div>
                                </div>
                                
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <label for="total_surface" class="form-label">And your last name?*</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="total_surface"
                                            name="total_surface">

                                    </div>
                                </div>

                                


                            </div>
                        </div>
                        <div class="form-group my-4">
                            <label for="total_surface" class="form-label">What is your e-mail?*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="total_surface" name="total_surface">

                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="total_surface" class="form-label">What is your phone number?*</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <img src="https://flagcdn.com/w20/il.png" alt="Country Flag">

                                </span>

                                <input type="tel" class="form-control" id="phone" placeholder=""
                                    required name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="step-footer d-flex justify-content-between">
                        <button class="btn btn-outline-dark"> <i class="fa fa-chevron-left"></i> Back</button>
                        <button class="btn btn-dark" x-on:click="nextStep(2)"> Next <i
                                class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/rent-out.png') }}" alt=""
                    class="margin-top-63 margin-bottom-87 margin-left-58">
            </div>
        </section>
    </div>
</x-app>
