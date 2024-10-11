<div class="property-primary ">
    <div class="property-primary_slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://picsum.photos/600/600" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://picsum.photos/600/600" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://picsum.photos/600/600" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://picsum.photos/600/600" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="icon" x-data="{ like: false }">
            <i class="far fa-heart" x-show="!like" x-on:click="like = true"></i>
            <i class="fas fa-heart" x-show="like" x-on:click="like = false"></i>
        </div>
    </div>
    <div class="margin-top-15 d-flex flex-column flex-gap-6 padding-x-8">
        <span class="fs-15 fw-medium aeonik-pro-medium">Cottage - Eliezer Yaffe St.</span>
        <span class="fs-15 fw-normal aeonik-pro-trial">Ra'anana, Israél</span>
        <small class="fs-14 aeonik-pro-trial" style="color: #75808A">150 m² - 3 rooms - 1 parking </small>
        <span class="fs-18  fw-900 aeonik-pro-trial">22 700 000 ₪ </span>
    </div>
    <div x-data="{ showPhone: false }">
        <!-- First Button -->
        <button class="show-phone-button margin-top-12" x-show="!showPhone" x-on:click="showPhone = true">
            <img src="{{ asset('assets/images/attributes/phone.svg') }}" alt="">
            <span>Show phone number</span>
        </button>

        <!-- Second Button -->
        <a href="tel:0538768986" class="show-phone-button margin-top-12" x-show="showPhone">
            <span class="text-primary">Anna</span><span>053-876-8986</span>
        </a>
    </div>

</div>
