<x-app>
    <div class="container">
        <ul class="breadcrumb fs-13 margin-top-19">
            <li>Kemea</li>
            <li><a href="">Affordability Calculator</a></li>
        </ul>

        <section class="padding-x-44 affordability_calculator margin-bottom-30">
            <div class="text-center">
                <h1 class="text-center fs-22">Affordability calculator</h1>
                <div class="mx-auto hr shadow">
                    <hr>
                </div>
            </div>
            <div class="row margin-top-80 justify-content-between">
                <div class="col-md-4">
                    <div class="d-flex justify-content-between fs-17 margin-bottom-8">
                        <span>Net Income</span>
                        <span>₪69,000</span>
                    </div>
                    <form>
                        <div class="margin-bottom-35">
                            <label for="income" class="form-label">Annual household income <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="income" placeholder="$75,000">
                                <span class="input-group-text">/ year</span>
                            </div>
                            <small class="form-text text-muted">Before taxes. Include any co-buyer’s income.</small>
                        </div>

                        <div class="margin-bottom-35">
                            <label for="debts" class="form-label">Monthly debts <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="debts" placeholder="$500">
                                <span class="input-group-text">/ month</span>
                            </div>
                            <small class="form-text text-muted">Obligations like loan and debt payments or alimony, but
                                not costs like groceries or utilities.</small>
                        </div>

                        <div class="margin-bottom-35">
                            <p class="fs-17 margin-bottom-8">Down Payment</p>
                            <label for="cash" class="form-label">Cash <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="cash" placeholder="$50,000">
                            <small class="form-text text-muted">Cash you can pay when you close.</small>
                        </div>

                        <div class="margin-bottom-35">
                            <p class="fs-17 margin-bottom-8">Location</p>
                            <label for="buyingLocation" class="form-label">Where are you buying?</label>
                            <input type="text" class="form-control" id="buyingLocation"
                                placeholder="City, neighborhood, or zip">
                            <small class="form-text text-muted">To calculate local taxes and costs.</small>
                        </div>
                    </form>

                </div>
                <div class="col-md-7 ">
                    <div class="shadow padding-x-25 padding-y-40">
                        <div class="card card-custom">
                            <div class="currency-symbol d-flex">₪ <span class="currency-dash">---,---</span></div>
                            <div class="row margin-top-60 margin-bottom-28">
                                <div class="col-6">
                                    <p class="mb-0 fs-20">Monthly payment</p>
                                </div>
                                <div class="col-6 text-end d-flex justify-content-end align-items-center">
                                    <div class="margin-right-10 fs-19">₪ <span class="currency-dash">-,---</span></div>
                                    <img src="{{ asset('assets/images/attributes/info.svg') }}" alt=""
                                        style="height: 22px; width: 22px;">
                                </div>
                            </div>

                            <div class="mt-3 d-flex justify-content-between align-items-center">
                                <p class="mb-1 fs-19">Down payment</p>
                                <p class="mb-0"><span class="currency-dash">--.--</span> %</p>
                            </div>

                            <div class="mt-3">
                                <p class="progress-label">Debt-to-income ratio:</p>
                                <h4><strong>36%</strong> | Comfortable</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-custom" role="progressbar"
                                        style="width: 36%; background-color: green;" aria-valuenow="36"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mt-4 text-muted text-center">
                                <p>Add a location to see homes that fit your budget</p>
                                <i class="bi bi-geo-alt" style="font-size: 1.5rem;"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>
</x-app>
