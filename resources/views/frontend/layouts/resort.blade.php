@extends('frontend.master.master')
@section('content')
<title>ToletX-Resort</title>

<header class="mt-4">
    <div class="container-fluid">
        <div class="">
            <div class="row  ">
                <div class="col-md-2 col-small mx-2 main-service text-center single_box" href="{{route('resort')}}">
                    <span class="icon-resort service_item"></span>
                    <br>
                    <span class="service_item_name"> Resort</span>
                </div>
            </div>
            <form class="form-horizontal top-form" action="{{route('restaurant_search')}}" role="form">
                @csrf
                <div class="row mt-3">
                    @include('frontend.include.selector_section')
                    <div class=" col-12 search_form_sec d-none">
                        <div class="row   justify-content-between">
                            <div class="col-12 top-from">
                                <input type="text" name="filter[address]" class="form-control" id="resort_search_autocomplete" placeholder="Location" aria-label=" location">
                            </div>
                            <div class="col-lg-3 col-md-3 mt-2  top-from">
                                <input type="date" name="filter[date]" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                            </div>
                            <div class="col-lg-3 col-md-3  mt-2  top-from">
                                <input type="date" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                            </div>
                            <div class="col-lg-3 col-md-3  mt-2 top-from">
                                <input type="number" class="form-control" id="guest-count" placeholder="Guests" aria-label="Guests">
                            </div>

                        </div>
                        <!-- Checkbox filters -->
                        <div class="my-4 ps-2">
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[attached_toilet]" id="attached_toilet">
                                <label class="form-check-label checkboxes-label" for="attached_toilet">Attached Toilet</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[hot_water]" id="hot_water">
                                <label class="form-check-label checkboxes-label" for="hot_water">Geyser</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[ac]" id="ac">
                                <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[wifi]" id="wifi">
                                <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[laundry]" id="laundry">
                                <label class="form-check-label checkboxes-label" for="laundry">Laundry</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[lift]" id="lift">
                                <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[furnished]" id="furnished">
                                <label class="form-check-label checkboxes-label" for="furnished">Furnished</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[cable_tv]" id="cableTv">
                                <label class="form-check-label checkboxes-label" for="cableTv">Cable TV</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[parking]" id="parking">
                                <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[sports]" id="sportsa">
                                <label class="form-check-label checkboxes-label" for="sports">Sports facilities</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[gym]" id="gym">
                                <label class="form-check-label checkboxes-label" for="gym">Gym</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[dining]" id="dining">
                                <label class="form-check-label checkboxes-label" for="dining">Dining facilities</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[spa]" id="spa">
                                <label class="form-check-label checkboxes-label" for="dining">Spa</label>
                            </div>
                        </div>

                        <div class="price-range-block mb-3">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="sliderText"> Rent Range </div>
                                    <div class="d-flex  ">
                                        <input type="number" name="filter[price]" min=100 max="9900000" id="min_price" class="price-range-field form-control me-2" placeholder="Min-rent" />
                                        <input type="number" name="filter[price]" min=100 max="10000000" id="max_price" class="price-range-field form-control" placeholder="Max-rent" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mt-2  top-from ">
                            <button type="submit" class=" btn btn-primary  w-100 rounded-pill white-text" id="">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
<!-- Header End -->



<!-- Option 2: Separate Popper and Bootstrap JS -->

@endsection