@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Resort</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_restuarant_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="resort_name_Rent" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="post_title" type="text" class="form-control" id="resort_name_Rent" placeholder="Enter Post Title" value="{{old('post_title')}}">
                        <span class="text-danger">@error('post_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="resort_name_Rent" class="form-label me-2 fw-bold">Resort Name</label>
                        <input name="resort_name" type="text" class="form-control" id="resort_name_Rent" placeholder="Enter Resort name" value="{{old('resort_name')}}">
                        <span class="text-danger">@error('resort_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_Rent" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_Rent" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="room_type_Rent" class="form-label me-2 fw-bold">Room Type</label>
                        <select id="room_type_Rent" class="form-select" name="room_type">
                            <option selected hidden>Choose...</option>
                            <option value="Bungalow" @selected(old('room_type')=="Bungalow" )>Bungalow</option>
                            <option value="cottage" @selected(old('room_type')=="cottage" )>Cottage</option>
                            <option value="Villa" @selected(old('room_type')=="Villa" )>Villa</option>
                            <option value="Honeymoon" @selected(old('room_type')=="Honeymoon" )>Honeymoon</option>
                            <option value="President" @selected(old('room_type')=="President" )>President</option>
                        </select>
                        <span class="text-danger">@error('room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Rent" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="price" type="number" class="form-control" id="price_Rent" placeholder="Enter Rent" value="{{old('price')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" name="per_price">
                                        <option selected hidden>Choose Rent Type</option>
                                        <option value="hour" @selected(old('per_price')=="hour" )>Hour</option>
                                        <option value="day" @selected(old('per_price')=="day" )> Day</option>
                                        <option value="night" @selected(old('per_price')=="night" )> Only Night</option>
                                        <option value="week" @selected(old('per_price')=="week" )> Week</option>
                                        <option value="month" @selected(old('per_price')=="month" )> Month</option>
                                        <option value="year" @selected(old('per_price')=="year" )> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p class="text-danger mb-0">@error('price') {{$message}} @enderror</p>
                        <p class="text-danger mb-0">@error('per_price') {{$message}} @enderror</p>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="s_charge_Rent" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="s_charge" type="number" class="form-control" id="s_charge_Rent" placeholder="Enter Service Charge" value="{{old('s_charge')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" name="s_per_price">
                                        <option selected hidden>Choose Service Type</option>
                                        <option value="hour" @selected(old('s_per_price')=="hour" )>Hour</option>
                                        <option value="day" @selected(old('s_per_price')=="day" )> Day</option>
                                        <option value="night" @selected(old('s_per_price')=="night" )> Only Night</option>
                                        <option value="week" @selected(old('s_per_price')=="week" )> Week</option>
                                        <option value="month" @selected(old('s_per_price')=="month" )> Month</option>
                                        <option value="year" @selected(old('s_per_price')=="year" )> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p class="text-danger mb-0">@error('s_charge') {{$message}} @enderror</p>
                        <p class="text-danger mb-0">@error('s_per_price') {{$message}} @enderror</p>
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" value="{{old('address')}}">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="attatched_toilet_Rent" name="attached_toilet" @checked(old('attached_toilet'))>
                            <label class="form-check-label" for="attatched_toilet_Rent">
                                Attached Toilet
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="hot_water_Rent" name="hot_water" @checked(old('hot_water'))>
                            <label class="form-check-label" for="hot_water_Rent">
                                Geyser
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="ac_Rent" name="ac" @checked(old('ac'))>
                            <label class="form-check-label" for="ac_Rent">
                                A.C
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="swimmingpool_Rent" name="swimmingpool" @checked(old('swimmingpool'))>
                            <label class="form-check-label" for="swimmingpool_Rent">
                                swimming Pool
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gym_Rent" name="gym" @checked(old('gym'))>
                            <label class="form-check-label" for="gym_Rent">
                                Gym
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="spa_Rent" name="spa" @checked(old('spa'))>
                            <label class="form-check-label" for="spa_Rent">
                                Spa
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="wifi_Rent" name="wifi" @checked(old('wifi'))>
                            <label class="form-check-label" for="wifi_Rent">
                                Wifi
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator" @checked(old('generator'))>
                            <label class="form-check-label" for="generator_Rent">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="laundry_Rent" name="laundry" @checked(old('laundry'))>
                            <label class="form-check-label" for="laundry_Rent">
                                Laundry
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift" @checked(old('lift'))>
                            <label class="form-check-label" for="lift_Rent">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking" @checked(old('parking'))>
                            <label class="form-check-label" for="parking_Rent">
                                Parking
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="sports_Rent" name="sports" @checked(old('sports'))>
                            <label class="form-check-label" for="sports_Rent">
                                Sports Facilities
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="dining_Rent" name="dining" @checked(old('dining'))>
                            <label class="form-check-label" for="dining_Rent">
                                Dining Facilities
                            </label>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_Rent"> Photo 1</label>
                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="photo1_Rent"> Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                        </div>
                        <div class="mb-3">
                            <label for="photo2_Rent"> Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                        </div>
                        <div class="mb-3">
                            <label for="photo3_Rent"> Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                        </div>
                        <div class="mb-3">
                            <label for="photo4_Rent"> Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                        </div>
                        <div class="mb-3">
                            <label for="photo5_Rent"> Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                        </div>
                        <div class="mb-3">
                            <label for="photo6_Rent"> Photo 7</label>
                            <input type="file" class="form-control" name="photo6" id="photo6_Rent">
                        </div>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_Rent" placeholder="  Youtube Link" value="{{old('video')}}">
                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: {{old('post_type') == 'Want' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_restuarant_wanted') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="post_title_Want" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_post_title" type="text" class="form-control" id="post_title_Want" placeholder="Enter Post Title" value="{{old('w_post_title')}}">
                        <span class="text-danger">@error('w_post_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="resort_name_Want" class="form-label me-2 fw-bold">Resort Name</label>
                        <input name="w_resort_name" type="text" class="form-control" id="resort_name_Want" placeholder="Enter Resort name" value="{{old('w_resort_name')}}">
                        <span class="text-danger">@error('w_resort_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_Want" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_Want" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="room_type_Want" class="form-label me-2 fw-bold">Room Type</label>
                        <select id="room_type_Want" class="form-select" name="w_room_type">
                            <option selected hidden>Choose...</option>
                            <option value="Bungalow" @selected(old('w_room_type')=="Bungalow" )>Bungalow</option>
                            <option value="cottage" @selected(old('w_room_type')=="cottage" )>Cottage</option>
                            <option value="Villa" @selected(old('w_room_type')=="Villa" )>Villa</option>
                            <option value="Honeymoon" @selected(old('w_room_type')=="Honeymoon" )>Honeymoon</option>
                            <option value="President" @selected(old('w_room_type')=="President" )>President</option>
                        </select>
                        <span class="text-danger">@error('w_room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Want" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="w_price" type="number" class="form-control" id="price_Want" placeholder="Enter Rent" value="{{old('w_price')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" name="w_per_price">
                                        <option selected hidden>Choose Rent Type</option>
                                        <option value="hour" @selected(old('w_per_price')=="hour" )>Hour</option>
                                        <option value="day" @selected(old('w_per_price')=="day" )> Day</option>
                                        <option value="night" @selected(old('w_per_price')=="night" )> Only Night</option>
                                        <option value="week" @selected(old('w_per_price')=="week" )> Week</option>
                                        <option value="month" @selected(old('w_per_price')=="month" )> Month</option>
                                        <option value="year" @selected(old('w_per_price')=="year" )> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p class="text-danger mb-0">@error('w_price') {{$message}} @enderror</p>
                        <p class="text-danger mb-0">@error('w_per_price') {{$message}} @enderror</p>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="s_charge_Want" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="w_s_charge" type="number" class="form-control" id="s_charge_Want" placeholder="Enter Service Charge" value="{{old('w_s_charge')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" name="w_s_per_price">
                                        <option selected hidden>Choose Service Type</option>
                                        <option value="hour" @selected(old('w_s_per_price')=="hour" )>Hour</option>
                                        <option value="day" @selected(old('w_s_per_price')=="day" )> Day</option>
                                        <option value="night" @selected(old('w_s_per_price')=="night" )> Only Night</option>
                                        <option value="week" @selected(old('w_s_per_price')=="week" )> Week</option>
                                        <option value="month" @selected(old('w_s_per_price')=="month" )> Month</option>
                                        <option value="year" @selected(old('w_s_per_price')=="year" )> Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <p class="text-danger mb-0">@error('w_s_charge') {{$message}} @enderror</p>
                        <p class="text-danger mb-0">@error('w_s_per_price') {{$message}} @enderror</p>
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                        <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address')}}">
                        <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{old('w_description')}}</textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2">
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="attatched_toilet_Want" name="w_attatched_toilet" @chew_attatched_toiletcked(old(''))>
                                <label class="form-check-label" for="attatched_toilet_Want">
                                    Attached Toilet
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_Want" name="w_hot_water" @checked(old('w_hot_water'))>
                                <label class="form-check-label" for="hot_water_Want">
                                    Geyser
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_Want" name="w_ac" @checked(old('w_ac'))>
                                <label class="form-check-label" for="ac_Want">
                                    A.C
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="swimmingpool_Want" name="w_swimmingpool" @checked(old('w_swimmingpool'))>
                                <label class="form-check-label" for="swimmingpool_Want">
                                    swimming Pool
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gym_Want" name="w_gym" @checked(old('w_gym'))>
                                <label class="form-check-label" for="gym_Want">
                                    Gym
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Want" name="w_generator" @checked(old('w_generator'))>
                                <label class="form-check-label" for="generator_Want">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="spa_Want" name="w_spa" @checked(old('w_spa'))>
                                <label class="form-check-label" for="spa_Want">
                                    Spa
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_Want" name="w_wifi" @checked(old('w_wifi'))>
                                <label class="form-check-label" for="wifi_Want">
                                    Wifi
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_Want" name="w_laundry" @checked(old('w_laundry'))>
                                <label class="form-check-label" for="laundry_Want">
                                    Laundry
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Want" name="w_lift" @checked(old('w_lift'))>
                                <label class="form-check-label" for="lift_Want">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Want" name="w_parking" @checked(old('w_parking'))>
                                <label class="form-check-label" for="parking_Want">
                                    Parking
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_Want" name="w_sports" @checked(old('w_sports'))>
                                <label class="form-check-label" for="sports_Want">
                                    Sports Facilities
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="dining_Want" name="w_dining" @checked(old('w_dining'))>
                                <label class="form-check-label" for="dining_Want">
                                    Dining Facilities
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