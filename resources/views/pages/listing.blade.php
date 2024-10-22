<x-app>
    <section class="container margin-top-48 d-flex flex-column flex-gap-15 caros-soft">
        <h1 class="fs-35 fw-medium">Find the right property, right away</h1>
        <h2 class="fs-20 fw-100">Kemea supports your property research in Israel at every stage</h2>
    </section>
    <nav class="sticky-top w-100 margin-y-20 mx-0 padding-y-10  postion-relative filter-nav" style="background:#fff; ">
     
            <div class="container filter-bar" style="background:#fff ">

                <div class="form-group-inner filter-search">
                    <input type="text" class="form-control" id="search" placeholder="">
                    <label for="search"><i class="fa fa-search"></i> <span>In what city ?</span> </label>
                </div>
                <div class="toggle-button" x-data="{
                    type: '{{ Route::currentRouteName() === 'home.sell' ? 'buy' : 'rent' }}',
                    navigate() {
                        window.location.href = this.type === 'buy' ? '{{ route('home.sell') }}' : '{{ route('home.rent') }}';
                    }
                }">
                    <div :class="type === 'buy' ? 'active' : ''" @click="type = 'buy'; navigate();">
                        <input type="radio" value="buy" id="buy" x-model="type" name="filter[type]" hidden>
                        <label for="buy">Buy</label>
                    </div>
                    <div :class="type === 'rent' ? 'active' : ''" @click="type = 'rent'; navigate();">
                        <input type="radio" value="rent" id="rent" x-model="type" name="filter[type]" hidden>
                        <label for="rent">Rent</label>
                    </div>
                </div>


                <div class="d-flex position-relative">



                    <div class="dropdown" :class="show ? 'active' : ''" x-data="{ show: false, selects: [] }">
                        <!-- Show the first selected item with a close icon if there are selected items -->
                        <template x-if="selects.length > 0">
                            <button class="dropdown-btn" x-on:click="selects = [];">
                                <span x-text="selects[0]"></span>

                                <i class="fa fa-times"></i>
                            </button>
                        </template>

                        <!-- Default 'Home type' text when no item is selected -->
                        <template x-if="selects.length === 0">
                            <button class="dropdown-btn" x-on:click="show = !show">
                                <span>Home type</span>
                                <i class="fa fa-chevron-down"></i>
                            </button>
                        </template>
                        <div class="dropdown-content">
                            {{-- @foreach ($collection as $item)
                                
                            @endforeach --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Apartment" id="flexCheckDefault"
                                    x-model="selects" @change="toggleSelection($event)">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Apartment
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Penthouse" id="flexCheckDefault2"
                                    x-model="selects" @change="toggleSelection($event)">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Penthouse
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Private House"
                                    id="flexCheckDefault3" x-model="selects" @change="toggleSelection($event)">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Private House
                                </label>
                            </div>
                            <template x-if="selects.length > 0">
                                <button class="ms-auto text-primary btn-link fs-14 fw-bold"
                                    x-on:click="show=false">Choose</button>
                            </template>
                        </div>


                    </div>


                    <div class="dropdown " style=" left: 165px">
                        <button class="dropdown-btn"><span>Price range</span> <i
                                class="fa fa-chevron-down"></i></button>
                        <div class="dropdown-content">
                            <!-- Price range options -->
                        </div>
                    </div>
                </div>
                {{-- <button class="search-btn">Search</button>
                
                <div class="alert-btn">
                    <button>Add an alert</button>
                </div> --}}

                {{-- <div class="view-options">
                    <button>List</button>
                    <button>Map</button>
                </div> --}}
            </div>
       
    </nav>
    <section class="container">
        <div class="row  row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 mb-4">
            @foreach ($properties as $property)
                <x-property-grid :property="$property" />
            @endforeach

        </div>
        {{ $properties->links() }}
    </section>
</x-app>
