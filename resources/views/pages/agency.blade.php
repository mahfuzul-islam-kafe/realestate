<x-app>
    <section class="container-fluid" id="agency-heading">
        <img src="{{ asset('assets/agency.png') }}" class="agency-cover" alt="">
        @agent
        <label style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: transparent; color: white; border:white 1px solid;border-radius:10px; padding:10px">
            <input type="file" style="display: none;">
            Modify The picture
        </label>
        @endagent
        <div class="agency-card">
            <div class="row  h-100 g-3 p-4">

                <div class="middle col-lg-2 col-md-6 col-12">
                    <div style="position: relative; display: inline-block;">
                        <img src="{{ asset($agency->logo) }}" class="agency-logo" alt="{{ $agency->agency_name }}"
                            title="{{ $agency->agency_name }}">
                        @agent
                        <label for="file-input"
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; color: #1D234E; border:#1D234E 1px solid;border-radius:25px; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Modify</label>
                        <input type="file" id="file-input"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                        @endagent
                    </div>

                </div>
                <div
                    class="middle flex-column align-items-md-start align-items-center col-lg-3 col-md-6 col-12 flex-gap-5 ">
                    <h3 class="aeonik fs-25 fw-500">
                        {{ $agency->agency_name }}
                    </h3>
                    <p class="caros-soft fs-14 fw-light">
                        {{ $agency->properties->count() }} Properties • Member since
                        {{ $agency->created_at->format('Y') }}
                    </p>

                    <a href="" class="aeonik fs-14 fw-300">
                        <img src="{{ asset('assets/images/attributes/location.svg') }}" style="height: 18px"
                            alt=""> {{ $agency->office_address }}
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12 middle">
                    <ul class="agency-schedule">
                        @foreach ($agency->schedule as $daySchedule)
                            <li>
                                <span>{{ implode(' - ', $daySchedule[0]) }}</span>
                                <span>- {{ implode(' - ', $daySchedule[1]) }}</span>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div
                    class="col-lg-4 col-md-6 col-12 d-flex justify-content-center align-items-center justify-content-md-start justify-content-lg-end">
                    <div class="agency-contact margin-right-40">

                        <div class="agency-contact_links">
                            <div class="d-flex justify-content-between">
                                <a href="{{ $agency->website }}"><img
                                        src="{{ asset('assets/images/attributes/website-out.svg') }}" alt="">
                                    <span>See their website</span> </a>
                                    @agent
                                    <a href="">Modify</a>
                                    @endagent
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="tel:{{ $agency->contact_number }}">
                                    <img src="{{ asset('assets/images/attributes/phone.svg') }}" alt="">
                                    <span>Show phone number</span>
                                    @agent
                                    <a href="">Modify</a>
                                    @endagent
                                </a>
                            </div>

                        </div>
                        <a class="btn btn-primary padding-y-12 padding-x-73 border-radius-99 fs-19">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <h1 class="aeonik fs-25 fw-400 margin-bottom-40">
            {{ $agency->agency_name }} : {{ $agency->propertiesListedFor('sell')->count() }} houses and apartments for
            sale
        </h1>
        <div class="row">
            <div class="col-xl-3 d-none d-xl-block ">
                <div class="form-group">
                    <label for="">Kind of property</label>
                    <select name="" class="form-select" id="">
                        <option value="">House</option>
                        <option value="">Apartment</option>
                    </select>
                </div>
                <div class="form-group margin-top-20">
                    <label for="">Price</label>
                    <div class="row row-cols-2">
                        <div>
                            <select name="" class="form-select" id="">
                                <option value="">Min.</option>
                            </select>
                        </div>
                        <div>
                            <select name="" class="form-select" id="">
                                <option value="">Max.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group margin-top-20">
                    <label for="">Surface</label>
                    <div class="row row-cols-2">
                        <div>
                            <select name="" class="form-select" id="">
                                <option value="">Min.</option>
                            </select>
                        </div>
                        <div>
                            <select name="" class="form-select" id="">
                                <option value="">Max.</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-9">

                @foreach ($propertiesSells as $property)
                    <div class="row row-cols-1 mb-3">


                        <x-property-row :property="$property" />

                    </div>
                @endforeach ()

            </div>

        </div>
    </section>
</x-app>
