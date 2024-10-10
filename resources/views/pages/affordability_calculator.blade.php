<x-app>
    <div class="container">
        <ul class="breadcrumb fs-13 margin-top-19">
            <li>Kemea</li>
            <li><a href="">Affordability Calculator</a></li>
        </ul>

        <section class="padding-x-44 affordability_calculator">
            <div class="text-center">
                <h1 class="text-center fs-22">Affordability calculator</h1>
                <div class="mx-auto hr shadow">
                    <hr>
                </div>
            </div>
            <div class="row margin-top-80 justify-content-between">
                <div class="col-md-4">
                    <div class="d-flex justify-content-between fs-17">
                        <span>Net Income</span>
                        <span>₪69,000</span>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="income" class="form-label">Annual household income <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="income" placeholder="$75,000">
                                <span class="input-group-text">/ year</span>
                            </div>
                            <small class="form-text text-muted">Before taxes. Include any co-buyer’s income.</small>
                        </div>

                        <div class="mb-3">
                            <label for="debts" class="form-label">Monthly debts <span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="debts" placeholder="$500">
                                <span class="input-group-text">/ month</span>
                            </div>
                            <small class="form-text text-muted">Obligations like loan and debt payments or alimony, but
                                not costs like groceries or utilities.</small>
                        </div>

                        <div class="mb-3">
                            <label for="downPayment" class="form-label">Down Payment</label>
                            <label for="cash" class="form-label">Cash <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="cash" placeholder="$50,000">
                            <small class="form-text text-muted">Cash you can pay when you close.</small>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <label for="buyingLocation" class="form-label">Where are you buying?</label>
                            <input type="text" class="form-control" id="buyingLocation"
                                placeholder="City, neighborhood, or zip">
                            <small class="form-text text-muted">To calculate local taxes and costs.</small>
                        </div>
                    </form>

                </div>
                <div class="col-md-7 shadow"></div>
            </div>
        </section>
    </div>
</x-app>
