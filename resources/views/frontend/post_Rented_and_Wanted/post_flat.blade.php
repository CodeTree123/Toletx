@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2  ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Flat</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')
        
        <div class="col-12" id="Rent" style="display: none;">
            <form method="POST" action="{{ route('post_flat_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="room_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="room_name_rented" placeholder="Enter Post Title" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_rented" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        {{--<select id="phone_rented" class="form-select" name="phone" required>
                            <option value="">Choose number</option>
                            @foreach($lists as $list)
                            <option value="{{$list->phone}}">{{$list->phone}}</option>
                        @endforeach
                        </select>--}}
                        <input name="phone" type="number" class="form-control" id="phone_rented" placeholder="Enter" value="{{$list->phone}}" readonly>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="price" type="number" class="form-control" id="price_rented" placeholder="Enter Rent" required>
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example"id="per_price_rented" name="per_price">
                                        <option selected hidden>Choose Rent Type</option>
                                        <option value="hour">Hour</option>
                                        <option value="day"> Day</option>
                                        <option value="night"> Only Night</option>
                                        <option value="week"> Week</option>
                                        <option value="month"> Month</option>
                                        <option value="year"> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="s_charge" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge" required>
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example"id="s_per_charge_rented" name="s_per_price">
                                        <option selected hidden>Choose Service Type</option>
                                        <option value="hour">Hour</option>
                                        <option value="day"> Day</option>
                                        <option value="night"> Only Night</option>
                                        <option value="week"> Week</option>
                                        <option value="month"> Month</option>
                                        <option value="year"> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_level_rented" class="form-label me-2 fw-bold">Floor Level</label>
                        <input name="floor_level" type="number" class="form-control" id="floor_level_rented" placeholder="Enter Floor Level" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="bedroom_rented" class="form-label me-2 fw-bold">No. of Bedrooms</label>
                        <input name="bedrooms" type="number" class="form-control" id="bedroom_rented" placeholder="Enter Bedrooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Drawing_rented" class="form-label me-2 fw-bold">No. of Drawing rooms</label>
                        <input name="drawing" type="number" class="form-control" id="Drawing_rented" placeholder="Enter Drawing rooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Dining_rented" class="form-label me-2 fw-bold">No. of Dining rooms</label>
                        <input name="dining" type="number" class="form-control" id="Dining_rented" placeholder="Enter Dining rooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Kitchen_rented" class="form-label me-2 fw-bold">No. of Kitchen rooms</label>
                        <input name="kitchen" type="number" class="form-control" id="Kitchen_rented" placeholder="Enter Kitchen rooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_varanda_rented" class="form-label me-2 fw-bold">No. of Varanda</label>
                        <input name="varanda" type="number" class="form-control" id="flat_varanda_rented" placeholder="Enter No. of varanda" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_attached_toilet_rented" class="form-label me-2 fw-bold">No. of Toilets</label>
                        <input name="attached_toilet" type="number" class="form-control" id="flat_attached_toilet_rented" placeholder="Enter No. of toilets" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_size_rented" class="form-label me-2 fw-bold">Flat Size</label>
                        <input name="flat_size" type="text" class="form-control" id="flat_size_rented" placeholder="Enter Flat Size" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity">
                            <label class="form-check-label" for="electricity_rented">
                                Electricity
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gas_rented" name="gas">
                            <label class="form-check-label" for="gas_rented">
                                Gas
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Water_rented" name="water">
                            <label class="form-check-label" for="Water_rented">
                                Water
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="furnished_rented" name="furnished">
                            <label class="form-check-label" for="furnished_rented">
                                Furniture
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="hot_water_rented" name="hot_water">
                            <label class="form-check-label" for="hot_water_rented">
                                Geyser
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="ac_rented" name="ac">
                            <label class="form-check-label" for="ac_rented">
                                A.C
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="cabel_tv_rented" name="cable_tv">
                            <label class="form-check-label" for="cabel_tv_rented">
                                Cable Tv
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_rented" name="generator">
                            <label class="form-check-label" for="gen_rented">
                                Generator
                            </label>
                        </div>

                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi">
                            <label class="form-check-label" for="wifi_rented">
                                Wifi
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Exit_rented" name="fire_exit">
                            <label class="form-check-label" for="Exit_rented">
                                Fire Exit
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_rented" name="lift">
                            <label class="form-check-label" for="lift_rented">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_rented" name="parking">
                            <label class="form-check-label" for="parking_rented">
                                Parking
                            </label>
                        </div>

                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <label for="photo_rented" class="d-block"> Photo 1</label>
                        <div class="input-group mb-3 ">

                            <input type="file" class="form-control" name="photo" id="photo_rented" placeholder="asd">
                        </div>

                        <label for="photo1_rented" class="d-block"> Photo 2</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo1" id="photo1_rented">
                        </div>

                        <label for="photo2_rented" class="d-block"> Photo 3</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo2" id="photo2_rented">
                        </div>

                        <label for="photo3_rented" class="d-block"> Photo 4</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo3" id="photo3_rented">
                        </div>

                        <label for="photo4_rented" class="d-block"> Photo 5</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo4" id="photo4_rented">
                        </div>

                        <label for="photo5_rented" class="d-block"> Photo 6</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo5" id="photo5_rented">
                        </div>

                        <label for="photo6_rented" class="d-block"> Photo 7</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo6" id="photo6_rented">
                        </div>

                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_rented" placeholder="  Youtube Link">
                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: none;">
            <form method="POST" action="{{ route('post_flat_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="room_name_wanted" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="room_name_wanted" placeholder="Enter Post Title " required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_wanted" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        {{--<select id="phone_wanted" class="form-select" name="phone" required>
                            <option value="">Choose number</option>
                            @foreach($lists as $list)
                            <option value="{{$list->phone}}">{{$list->phone}}</option>
                        @endforeach
                        </select>--}}
                        <input name="phone" type="number" class="form-control" id="phone_wanted" placeholder="Enter " value="{{$list->phone}}" readonly>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="price_wanted" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="price" type="number" class="form-control" id="price_wanted" placeholder="Enter Rent" required>
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="per_price">
                                        <option selected hidden>Choose Rent Type</option>
                                        <option value="hour">Hour</option>
                                        <option value="day"> Day</option>
                                        <option value="night"> Only Night</option>
                                        <option value="week"> Week</option>
                                        <option value="month"> Month</option>
                                        <option value="year"> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="s_charge_wanted" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="s_charge" type="number" class="form-control" id="s_charge_wanted" placeholder="Enter Service Charge" required>
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="s_per_price">
                                        <option selected hidden>Choose Service Type</option>
                                        <option value="hour">Hour</option>
                                        <option value="day"> Day</option>
                                        <option value="night"> Only Night</option>
                                        <option value="week"> Week</option>
                                        <option value="month"> Month</option>
                                        <option value="year"> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_level_wanted" class="form-label me-2 fw-bold">Floor Level</label>
                        <input name="floor_level" type="number" class="form-control" id="floor_level_wanted" placeholder="Enter Floor Level" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="bedroom_wanted" class="form-label me-2 fw-bold">No. of Bedrooms</label>
                        <input name="bedrooms" type="number" class="form-control" id="bedroom_wanted" placeholder="Enter No. of Bedrooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Drawing_wanted" class="form-label me-2 fw-bold">No. of Drawing rooms</label>
                        <input name="drawing" type="number" class="form-control" id="Drawing_wanted" placeholder="Enter Drawing rooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Dining_wanted" class="form-label me-2 fw-bold">No. of Dining rooms</label>
                        <input name="dining" type="number" class="form-control" id="Dining_wanted" placeholder="Enter Dining rooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_Kitchen_wanted" class="form-label me-2 fw-bold">No. of Kitchen rooms</label>
                        <input name="kitchen" type="number" class="form-control" id="flat_Kitchen_wanted" placeholder="Enter Kitchen rooms" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_varanda_wanted" class="form-label me-2 fw-bold">No. of Varanda</label>
                        <input name="varanda" type="number" class="form-control" id="flat_varanda_wanted" placeholder="Enter No. of varanda" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_attached_toilet_wanted" class="form-label me-2 fw-bold">No. of Toilets</label>
                        <input name="attached_toilet" type="number" class="form-control" id="flat_attached_toilet_wanted" placeholder="Enter No. of toilets" required>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_size_wanted" class="form-label me-2 fw-bold">Flat Size</label>
                        <input name="flat_size" type="text" class="form-control" id="flat_size_wanted" placeholder="Enter Flat Size" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Ameneties</h2>
                        <div class="row ms-3 ps-2">
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="electricity_wanted" name="electricity">
                                <label class="form-check-label" for="electricity_wanted">
                                    Electricity
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_wanted" name="gas">
                                <label class="form-check-label" for="gas_wanted">
                                    Gas
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Water_wanted" name="water">
                                <label class="form-check-label" for="Water_wanted">
                                    Water
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="furnished_wanted" name="furnished">
                                <label class="form-check-label" for="furnished_wanted">
                                    Furniture
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_wanted" name="hot_water">
                                <label class="form-check-label" for="hot_water_wanted">
                                    Geyser
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_wanted" name="ac">
                                <label class="form-check-label" for="ac_wanted">
                                    A.C
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="cabel_tv_wanted" name="cable_tv">
                                <label class="form-check-label" for="cabel_tv_wanted">
                                    Cable Tv
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_wanted" name="wifi">
                                <label class="form-check-label" for="wifi_wanted">
                                    Wifi
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_wanted" name="generator">
                                <label class="form-check-label" for="gen_wanted">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_wanted" name="fire_exit">
                                <label class="form-check-label" for="Exit_wanted">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_wanted" name="lift">
                                <label class="form-check-label" for="lift_wanted">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_wanted" name="parking">
                                <label class="form-check-label" for="parking_wanted">
                                    Parking
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection