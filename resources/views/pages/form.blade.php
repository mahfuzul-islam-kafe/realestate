<x-app>

    <form action="{{route('form.submit')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 mx-auto mt-3">


            <div class="card ">
                <div class="card-header">
                    Property address
                </div>
                <div class="card-body">
                    <div class="row row-cols-2">

                        <div class="form-group">
                            <label for="">property_type</label>
                            <select class="form-select" aria-label="Default select example" name="property_type">
                                @foreach ($types as $item)
                                <option value="{{$item->id}}">{{$item->display_name}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">property_condition</label>
                            <select class="form-select" aria-label="Default select example" name="property_condition">
                                @foreach ($conditions as $item)
                                <option value="{{$item->id}}">{{$item->display_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">city</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="row row-cols-2">
                            <div class="form-gorup">
                                <label for="">street</label>
                                <input type="text" class="form-control" name="street">
                            </div>
                            <div class="form-gorup">
                                <label for="">street_number</label>
                                <input type="text" class="form-control" name="street_number">
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="form-gorup ">
                                <label for="">sell_floor on total_floor</label>
                                <input type="number" class="form-control" name="sell_floor">
                                <div class="text-center">on</div>
                                <input type="number" class="form-control" name="total_floor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">area</label>
                            <select class="form-select" aria-label="Default select example" name="area">
                                <option selected>Open this select menu</option>
                                <option value="north">north</option>
                                <option value="east">east </option>
                                <option value="south">south</option>
                                <option value="west">west</option>
                                <option value="northeast">northeast</option>
                                <option value="southeast">southeast</option>
                                <option value="southwest">southwest</option>
                                <option value="northwest">northwest</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-check-input" type="checkbox"  id="ground_floor"
                                name="ground_floor">
                            <label class="form-check-label" for="ground_floor">
                                ground_floor
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Step 2 - About the property
                </div>
                <div class="card-body">
                    <div class="row row-cols-2">
                        <div class="row row-cols-2">

                            <div class="form-group">
                                <label for="">rooms_count</label>
                                <input type="number" class="form-control" name="rooms_count">
                            </div>
                            <div class="form-group">
                                <label for="">surface_build</label>
                                <input type="number" class="form-control" name="surface_build">
                            </div>
                            <div class="form-group">
                                <label for="">total_surface</label>
                                <input type="number" class="form-control" name="total_surface">
                            </div>
                            <div class="form-group">
                                <label for="">price</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <div class="form-group">
                                <label for="">sell_entry_date</label>
                                <input id="startDate" class="form-control" type="date" name="sell_entry_date">

                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" value="" id="immediately"
                                        name="immediately">
                                    <label class="form-check-label" for="immediately">
                                        immediately
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" value="" id="flexible"
                                        name="flexible">
                                    <label class="form-check-label" for="flexible">
                                        flexible
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-2">
                            <div class="">
                                <label for="">balcony_count</label>
                                <div class="row row-cols-3">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="balcony_count"
                                            id="balcony_count1">
                                        <label class="form-check-label" for="balcony_count1">
                                            1
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="balcony_count"
                                            id="balcony_count2">
                                        <label class="form-check-label" for="balcony_count2">
                                            2
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="balcony_count"
                                            id="balcony_count3">
                                        <label class="form-check-label" for="balcony_count3">
                                            +3
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <label for="">carpark_count</label>
                                <div class="row row-cols-3">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carpark_count"
                                            id="carpark_count1">
                                        <label class="form-check-label" for="carpark_count1">
                                            1
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carpark_count"
                                            id="carpark_count2">
                                        <label class="form-check-label" for="carpark_count2">
                                            2
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="carpark_count"
                                            id="carpark_count3">
                                        <label class="form-check-label" for="carpark_count3">
                                            +3
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="access_for_disabled">
                                <label for="">access_for_disabled</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="elevators">
                                <label for="">elevators</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="renovated">
                                <label for="">renovated</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="air_conditionner">
                                <label for="">air_conditionner</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="furnitures_included">
                                <label for="">furnitures_included</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="mamad">
                                <label for="">mamad</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bars">
                                <label for="">bars</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="unit">
                                <label for="">unit</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="personal_mazgan">
                                <label for="">personal_mazgan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="water_heater">
                                <label for="">water_heater</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="kosher_kitchen">
                                <label for="">kosher_kitchen</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="storage">
                                <label for="">storage</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Step 3 - Description
                </div>
                <div class="card-body">
                    <div class="form-gorup">
                        <label for="">property_description</label>
                        <textarea name="property_description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    Step 4 - Photos and videos
                </div>
                <div class="card-body">
                    <div class="form-gorup">
                        <label for="">matterport_link</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    Step 5 - Contact Information
                </div>
                <div class="card-body">
                    <div class="row row-cols-2">
                        <div class="form-gorup">
                            <label for="">name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-gorup">
                            <label for="">number</label>
                            <input type="text" class="form-control" name="number">
                        </div>
                        <div class="">
                            <div class="form-gorup">
                                <input class="form-check-input" type="checkbox" 
                                    name="is_mailable">
                                <label class="form-check-label" >
                                    is_mailable
                                </label>
                            </div>
                            <div class="form-gorup">
                                <input class="form-check-input" type="checkbox"
                                    name="is_suggestible">
                                <label class="form-check-label" >
                                    is_suggestible
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-info">submit</button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</x-app>
