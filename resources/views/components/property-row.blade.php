<div class="property-row">

    <div class="property-row_slider">
        <div class="swiper-wrapper">
            @foreach ($property->images as $image)
                <div class="swiper-slide">
                    <img src="{{ $image->path }}" alt="" style="height: 280px; object-fit: cover;">
                </div>
            @endforeach


        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="property-row_details">
        <div class="property-row_details_text">

            <a href="{{ $property->url() }}">
                <h4 class="mb-2 text-dark">Detached {{ $property->type->display_name }} - {{ $property->street }},
                    {{ $property->city }}</h4>
            </a>
            <div>
                <span class="price me-2">
                    {{ $property->price }} <span class="fs-40">₪</span>
                </span>
                <span class="discount me-2">
                    73 000 <span class="fs-20">₪</span>
                </span>
                <span class="discount-percent fs-14 ">
                    <i class="fa fa-arrow-down"></i> 4 <i class="fa fa-percent"></i>
                </span>
            </div>
            <div class="fs-14 fw-300 d-flex gap-2 mb-2">
                <span>{{ $property->total_surface }} m²</span>
                <span>{{ $property->rooms_count }} bdr.</span>
                <span>5 baths</span>
            </div>
            <p class="fw-300">
                {!! $property->property_description !!}
            </p>

        </div>

        <div class="property-row_details_footer">
            <div class=" d-flex gap-4">

                <a class="fs-15 text-dark fw-300" href="tel:{{ $property->agency->contact_number }}"><i
                        class="fa fa-phone me-2"></i>See the phone
                    number</a>
                <a class="fs-15 text-dark fw-300" href=""><img
                        src="{{ asset('assets/images/attributes/messages.svg') }}" alt="">Contact</a>
            </div>
            {{-- <div>
                <a href=""><img src="{{asset('assets/images/l')}}" alt=""></a>
            </div> --}}
        </div>
    </div>
</div>
