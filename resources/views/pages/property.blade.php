<x-app>
    <section class="container margin-top-42">
        <div class="row g-3">
            <div class="col-md-8">

                <h1 class="fs-30 p-0 m-0">
                    {{ $property->name() }}
                </h1>
                <ul class="px-3 m-0 mt-1">
                    <li>
                        <a href="" class="text-dark fs-17">

                            {{ $property->fullAddress() }}

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 d-flex align-items-end justify-content-md-end justify-content-start ">
                <ul class="d-flex gap-4 ls-none m-0 p-0">
                    <li>
                        <a href="" class="text-dark"><i class="far fa-heart"></i> Save</a>
                    </li>
                    <li>
                        <a href="" class="text-dark"><i class="fa-solid fa-arrow-up-from-bracket"></i> Share</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row g-3 mt-1">
            <div class="col-lg-6 col-md-12">

                <img class="rounded  img-rect" style="height: 100%" src="{{ @$property->featuredimages[0]->getUrl() }}"
                    alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row g-3">
                    <div class="col-md-6 col-6"><img class="rounded  img-rect"
                            src="{{ @$property->featuredimages[1]->getUrl() }}" alt=""></div>
                    <div class="col-md-6 col-6"><img class="rounded  img-rect "
                            src="{{ @$property->featuredimages[2]->getUrl() }}" alt=""></div>
                    <div class="col-md-6 col-6"><img class="rounded  img-rect"
                            src="{{ @$property->featuredimages[3]->getUrl() }}" alt=""></div>
                    <div class="col-md-6 col-6 position-relative"><img class="rounded  img-rect"
                            src="{{ @$property->featuredimages[4]->getUrl() }}" alt="">
                        <a class="bg-light d-none d-md-block padding-y-8 padding-x-18 fs-15 text-decoration-underline text-dark border-radius-20 position-absolute"
                            style="bottom:9px;right:18px;" href="">See all {{ $property->images()->count() }}
                            pictures</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container margin-top-40">
        <div class="row">
            <div class="col-lg-8">
                <div style="width: 100%;overflow:scroll" class="hide-scroll">

                    <ul class="nav  mb-3 d-flex flex-row  hide-scroll"
                        style="flex-wrap: nowrap;overflow:scroll;width:100%" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-desc-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-finance-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-finance" type="button" role="tab"
                                aria-controls="pills-finance" aria-selected="false">Finance</button>
                        </li>


                    </ul>

                </div>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-desc" role="tabpanel"
                        aria-labelledby="pills-desc-tab">

                        <p class="fw-bold fs-40 margin-bottom-35">{{ $property->price() }} </p>
                        <p class="fs-18  margin-bottom-30 ">{{ $property->fullAddress() }}</p>
                        <div class=" p-0 m-0 d-flex flex-wrap flex-gap-10 margin-bottom-35">
                            <div class="attribute-primary">
                                <img height="19" src="{{ asset('assets/images/attributes/home.svg') }}"
                                    alt=""> {{ $property->totalSurfaceArea() }}</span>
                            </div>
                            <div class="attribute-primary">
                                <img height="19" src="{{ asset('assets/images/attributes/bed.svg') }}"
                                    alt=""> {{ $property->rooms_count }} Rooms
                            </div>
                            <div class="attribute-primary">
                                <img height="19" src="{{ asset('assets/images/attributes/bath.svg') }}"
                                    alt=""> 4 Baths
                            </div>
                        </div>
                        <div style="height: 1px;width:100%;background-color:#DDDDDD"></div>
                        <h3 class="fs-25 font-weight-500 margin-y-30 text-center text-md-start">
                            Description
                        </h3>
                        <p class="margin-bottom-30">
                            {!! $property->property_description !!}
                        </p>

                        <div style="height: 1px;width:100%;background-color:#DDDDDD"></div>
                        <h3
                            class="fs-25 font-weight-500 margin-y-30 text-center text-md-start text-center text-md-start">
                            About this property
                        </h3>
                        <div class="row row-cols-md-2 row-cols-1 row-cols-lg-3 g-3 margin-bottom-30 g-3">
                            <ul class="ls-none d-flex flex-column flex-gap-30">
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Type of property</span> <span
                                        class="fw-bold">{{ $property->type->display_name }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Property condition</span> <span
                                        class="fw-bold">{{ $property->condition->display_name }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>City</span> <span class="fw-bold">{{ $property->city }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Address</span> <span class="fw-bold">{{ $property->street }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Area</span> <span class="fw-bold">{{ $property->area }}</span>
                                </li>
                            </ul>
                            <ul class="ls-none d-flex flex-column flex-gap-30">
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Number of floors</span> <span
                                        class="fw-bold">{{ $property->total_floor }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Number of rooms</span> <span
                                        class="fw-bold">{{ $property->rooms_count }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Number of balcony</span> <span
                                        class="fw-bold">{{ $property->balcony_count }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Ground/covered car park</span> <span
                                        class="fw-bold">{{ $property->carpark_count }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Surface build</span> <span class="fw-bold">{{ $property->surface_build }} m²
                                    </span>
                                </li>
                            </ul>
                            <ul class="ls-none d-flex flex-column flex-gap-30">
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Total surface</span> <span class="fw-bold">{{ $property->total_surface }} m²
                                    </span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Entry date</span> <span class="fw-bold">{{ $property->entry_date() }}
                                    </span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Entry condition</span> <span
                                        class="fw-bold">{{ $property->flexible ? 'Flexible' : 'Not Flexible' }}</span>
                                </li>
                                <li class="d-flex flex-gap-15 fs-15">
                                    <span>Price</span> <span class="fw-bold">{{ $property->price() }} </span>
                                </li>

                            </ul>
                        </div>
                        {{-- @dd($property) --}}
                        <div style="height: 1px;width:100%;background-color:#DDDDDD"></div>
                        <h3 class="fs-25 font-weight-500 margin-y-30 text-center text-md-start">
                            What this house offers
                        </h3>
                        <div class="row row-cols-md-2 row-cols-1 row-cols-lg-3 g-3 margin-bottom-30">
                            @php
                                $attributes = [
                                    'Furniture included' => $property->furnitures_included,
                                    'Air conditioner' => $property->air_conditionner,
                                    'Bars' => $property->bars,
                                    'Personal Mazgan' => $property->personal_mazgan,
                                    'Water heater' => $property->water_heater,
                                    'Renovated' => $property->renovated,
                                    'Access for disabled' => $property->access_for_disabled,
                                    'Elevators' => $property->elevators,
                                    'Storage' => $property->storage,
                                    'Kosher kitchen' => $property->kosher_kitchen,
                                ];
                            @endphp
                            @foreach ($attributes as $label => $value)
                                @if ($value)
                                    <div
                                        class="d-flex flex-gap-20 flex-column align-items-center align-items-md-start">
                                        <div class="attribute-secondary p-3">
                                            <img src="{{ asset('assets/images/attributes/' . Str::slug($label) . '.svg') }}"
                                                alt="{{ $label }}">
                                            <span>{{ $label }}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                           
                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-finance" role="tabpanel"
                        aria-labelledby="pills-finance-tab">
                        asd.</div>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="card border-radius-20 border-1 shadow-sm mx-auto ms-md-auto margin-bottom-15"
                    style="width: 90%">
                    <div class="card-body align-items-center d-flex flex-column gap-3 ">
                        <a href="" class="btn btn-primary border-radius-99" style="width: 90%;height:66px;">
                            <span class="fs-19">Request a tour</span>
                            <br>
                            <span class="fs-12">As early as today 11:00 am</span>
                        </a>
                        <a href="tel:{{ $property->agency->contact_number }}"
                            class="border border-dark border-radius-99 p-0 text-dark d-flex justify-content-center align-items-center gap-2"
                            style="width: 90%;height:57px;text-decoration: none">
                            <img src="{{ asset('assets/images/attributes/phone.svg') }}" alt="">
                            <span>Show phone number</span>
                        </a>
                    </div>
                </div>
                <div class="card border-radius-20 border-1 shadow-sm mx-auto ms-md-auto margin-bottom-15"
                    style="width: 90%">
                    <div class="card-body padding-x-28 padding-y-25 ">
                        <div class="d-flex  align-items-center gap-3 margin-bottom-40">
                            <img height="67" width="67" src="{{ asset($property->agency->logo) }}"
                                alt="">
                            <p class="fs-20 mt-4">{{ $property->agency->agency_name }}</p>
                        </div>

                        <p class="border border-radius-10 padding-y-15 padding-x-11 margin-bottom-14 p-2">
                            Good morning,
                            <br>
                            <br>
                            I would like more information about this
                            property.
                            <br>
                            Please contact me for this.
                            <br>
                            <br>
                            Cordially
                        </p>
                        <div class="d-flex flex-column flex-gap-14 m-0 margin-bottom-16">
                            <div class="form-group-inner">
                                <input type="text" id="name" class="form-control" placeholder="" required>
                                <label for="name">Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group-inner">
                                <input type="text" id="email" class="form-control" placeholder="" required>
                                <label for="email">Email <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group-inner">
                                <input type="tel" id="phone" class="form-control" placeholder="" required>
                                <label for="phone">Phone number </label>
                            </div>
                        </div>

                        <button
                            class="btn btn-dark border-radius-99 w-100 padding-y-13 fs-19 margin-bottom-17">Send</button>
                        <a href="{{ $property->agency->url() }}" class="text-dark text-decoration-underline"> To the
                            office website</a>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab">

                <div style="height: 1px;width:100%;background-color:#DDDDDD"></div>
                <h3 class="fs-25 font-weight-500 margin-y-30 text-center text-md-start">
                    Where is this property located
                </h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d230.0278695160656!2d90.349999610436!3d22.711661704301257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1728555158398!5m2!1sen!2sbd"
                    width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="margin-top-30">
                    Any real estate investment involves risk.
                    <br>
                    Our calculations and forecasts are not indicative of future performance.
                </p>
            </div>
        </div>
    </section>
</x-app>
