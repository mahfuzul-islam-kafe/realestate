<div class="property-primary ">

    <div class="property-primary_slider">
        <div class="swiper-wrapper">
            @foreach ($property->featuredimages as $image)
                <div class="swiper-slide">
                    <img src="{{ $image->getUrl() }}" alt="" class="bg-dark">
                </div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>

        <div class="icon" x-data="{ like: false }">
            <!-- Form for submitting the favorite action -->
            <form x-ref="favoriteForm" method="POST" action="{{ route('favorite.add') }}">
                @csrf
                <input type="hidden" name="property_id" value="{{ $property->id }}">
            </form>

            <!-- Heart icons with direct form submission on click -->
            <i class="far fa-heart" x-show="!like" x-on:click="like = true; $refs.favoriteForm.submit();"></i>
            <i class="fas fa-heart" x-show="like" x-on:click="like = false; $refs.favoriteForm.submit();"></i>
        </div>


    </div>
    <div class="margin-top-15 d-flex flex-column flex-gap-6 padding-x-8">
        <a class="fs-15 fw-medium text-dark" href="{{ $property->url() }}"> {{ $property->name() }} </a>
        <span class="fs-15 fw-normal ">{{ $property->area }}, {{ $property->country }}</span>
        <small class="fs-14 " style="color: #75808A">{{ $property->totalSurfaceArea() }} - {{ $property->totalRooms() }}
            - {{ $property->totalParkings() }} </small>
        <span class="fs-18  fw-900 ">{{ $property->price() }} </span>
    </div>
    <div x-data="{ showPhone: false }">
        <!-- First Button -->
        <button class="show-phone-button margin-top-12" x-show="!showPhone" x-on:click="showPhone = true">
            <img src="{{ asset('assets/images/attributes/phone.svg') }}" alt="">
            <span>Show phone number</span>
        </button>

        <!-- Second Button -->
        <a href="tel:0538768986" class="show-phone-button margin-top-12" x-show="showPhone">
            <span
                class="text-primary">{{ $property->agent->name }}</span><span>{{ $property->agency->contact_number }}</span>
        </a>
    </div>

</div>
