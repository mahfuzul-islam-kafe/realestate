<x-app>
    <section class="margin-top-80 container d-flex flex-column justify-content-between" style="height: 80vh"
        x-data="{ property: null }">
        <div>

            <h1 class="caros-soft fs-55 fw-400 text-center margin-bottom-66">
                It’s easy to publish an ad <br> on Kemea
            </h1>
            <p class="fs-25 text-center">
                Fill a form with some quick questions,
                <br>
                we will check it and then publish it !
            </p>
            <div class="d-flex gap-4 margin-top-70 flex-wrap justify-content-center">
                <label :class="property === 'sell' ? 'ads-type selected' : 'ads-type'">
                    <input type="radio" x-model="property" name="property" value="sell">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/attributes/home.svg') }}">
                        <p>I want to sell a property</p>
                    </div>
                </label>

                <label :class="property === 'rent' ? 'ads-type selected' : 'ads-type'">
                    <input type="radio" x-model="property" name="property" value="rent">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/attributes/building.svg') }}">
                        <p>I want to rent a property</p>
                    </div>
                </label>
            </div>

        </div>
        <div class=" margin-bottom-10 d-flex justify-content-between" style="bottom: 50px;left:5%">
            <a class="text-dark" href=""><i class="fa fa-chevron-left "></i> <span
                    class="text-decoration-underline">Back</span></a>
          
                <a x-show="property === 'rent'" class="text-dark " href="{{route('publish.property.rent')}}"> <span class="text-decoration-underline ">Next</span> <i
                        class="fa fa-chevron-right "></i></a>
    
        
                <a x-show="property === 'sell'" class="text-dark "href="{{route('publish.property.sell')}}"> <span class="text-decoration-underline ">Next</span> <i
                        class="fa fa-chevron-right "></i></a>
      
        </div>
    </section>

</x-app>
