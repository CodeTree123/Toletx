@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2  ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Hotel</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_hotel_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="post_title_Rent" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="post_title" type="text" class="form-control" id="post_title_Rent" placeholder="Enter Post Title" value="{{old('post_title')}}">
                        <span class="text-danger">@error('post_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="hostel_name_Rent" class="form-label me-2 fw-bold">Hotel Name</label>
                        <input name="hotel_name" type="text" class="form-control" id="hostel_name_Rent" placeholder="Enter Hotel Name" value="{{old('hotel_name')}}">
                        <span class="text-danger">@error('hotel_name') {{$message}} @enderror</span>
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
                            <option selected hidden>Choose number</option>
                            <option value="Single bed">Single bed</option>
                            <option value="Double bed">Double bed</option>
                            <option value="Family bed">Family bed</option>
                            <option value="Couple bed">Couple bed</option>
                            <option value="Twin bed">Twin bed</option>
                            <option value="Bunk bed">Bunk bed</option>
                            <option value="Honeymoon Suite">Honeymoon Suite</option>
                            <option value="Presidential Suite">Presidential Suite</option>
                        </select>
                        <span class="text-danger">@error('room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="price_Rent" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="price" type="number" class="form-control" id="price_Rent" placeholder="Enter Rent" value="{{old('')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_Rent" name="per_price">
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
                        <span class="text-danger">@error('price') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="s_charge_Rent" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="s_charge" type="number" class="form-control" id="s_charge_Rent" placeholder="Enter Service Charge" value="{{old('')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" id="s_per_price_Rent" name="s_per_price">
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
                        <span class="text-danger">@error('s_charge') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('s_per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="guest_Rent" class="form-label me-2 fw-bold">Guest</label>
                        <input name="guest_count" type="number" class="form-control" id="guest_Rent" placeholder="Enter Guest" value="{{old('guest_count')}}">
                        <span class="text-danger">@error('guest_count') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="address_Rent" class="form-label me-2 fw-bold">Location</label>
                        <input name="location" type="text" class="form-control" placeholder="Enter Address" value="{{old('location')}}">
                        <span class="text-danger">@error('location') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="bathroom_Rent" name="bathroom">
                            <label class="form-check-label" for="bathroom_Rent">
                                Bathroom
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="hot_water_Rent" name="hot_water">
                            <label class="form-check-label" for="hot_water_Rent">
                                Geyser
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="ac_Rent" name="ac">
                            <label class="form-check-label" for="ac_Rent">
                                A.C
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="dining_Rent" name="dining">
                            <label class="form-check-label" for="dining_Rent">
                                Dining Facilities
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gym_Rent" name="gym">
                            <label class="form-check-label" for="gym_Rent">
                                Gym
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator">
                            <label class="form-check-label" for="generator_Rent">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="sports_Rent" name="sports">
                            <label class="form-check-label" for="sports_Rent">
                                Sports Facilities
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="wifi_Rent" name="wifi">
                            <label class="form-check-label" for="wifi_Rent">
                                Wifi
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="laundry_Rent" name="laundry">
                            <label class="form-check-label" for="laundry_Rent">
                                Laundry
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift">
                            <label class="form-check-label" for="lift_Rent">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Exit_Rent" name="fire_exit">
                            <label class="form-check-label" for="Exit_Rent">
                                Fire Exit
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking">
                            <label class="form-check-label" for="parking_Rent">
                                Parking
                            </label>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_Rent" class="d-block"> Photo 1</label>
                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_Rent" class="d-block"> Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_Rent" class="d-block"> Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_Rent" class="d-block"> Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_Rent" class="d-block"> Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_Rent" class="d-block"> Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_Rent" class="d-block"> Photo 7</label>
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
            <form method="POST" action="{{ route('post_hotel_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="hostel_post_Want" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_post_title" type="text" class="form-control" id="hostel_post_Want" placeholder="Enter Post Title" value="{{old('w_post_title')}}">
                        <span class="text-danger">@error('post_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="hostel_name_Want" class="form-label me-2 fw-bold">Hotel Name</label>
                        <input name="w_hotel_name" type="text" class="form-control" id="hostel_name_Want" placeholder="Enter Hotel Name" value="{{old('w_hotel_name')}}">
                        <span class="text-danger">@error('hotel_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_Want" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_Want" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="room_type_Want" class="form-label me-2 fw-bold">Room Type</label>
                        <select id="room_type_Want" class="form-select" name="w_room_type" value="{{old('w_')}}">
                            <option selected hidden>Choose number</option>
                            <option value="Single bed">Single bed</option>
                            <option value="Double bed">Double bed</option>
                            <option value="Family bed">Family bed</option>
                            <option value="Couple bed">Couple bed</option>
                            <option value="Twin bed">Twin bed</option>
                            <option value="Bunk bed">Bunk bed</option>
                            <option value="Honeymoon Suite">Honeymoon Suite</option>
                            <option value="Presidential Suite">Presidential Suite</option>
                        </select>
                        <span class="text-danger">@error('room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="price_Want" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="w_price" type="number" class="form-control" id="price_Want" placeholder="Enter Price" value="{{old('w_')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_Want" name="w_per_price">
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
                        <span class="text-danger">@error('price') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="s_charge_Want" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="w_s_charge" type="number" class="form-control" id="s_charge_Want" placeholder="Enter Service Charge" value="{{old('w_')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" id="s_per_price_Want" name="w_s_per_price">
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
                        <span class="text-danger">@error('s_charge') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('s_per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="guest_Want" class="form-label me-2 fw-bold">Guest</label>
                        <input name="w_guest_count" type="number" class="form-control" id="guest_Want" placeholder="Enter Guest" value="{{old('w_guest_count')}}">
                        <span class="text-danger">@error('guest_count') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="address_Want" class="form-label me-2 fw-bold">Location</label>
                        <input name="w_location" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_location')}}">
                        <span class="text-danger">@error('location') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{old('w_description')}}</textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2">
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="bathroom_Want" name="w_bathroom">
                                <label class="form-check-label" for="bathroom_Want">
                                    Bathroom
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="attatched_toilet_Want" name="w_attatched_toilet">
                                <label class="form-check-label" for="attatched_toilet_Want">
                                    Attached Toilet
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_Want" name="w_hot_water">
                                <label class="form-check-label" for="hot_water_Want">
                                    Geyser
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_Want" name="w_ac">
                                <label class="form-check-label" for="ac_Want">
                                    A.C
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="dining_Want" name="w_dining">
                                <label class="form-check-label" for="dining_Want">
                                    Dining Facilities
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gym_Want" name="w_gym">
                                <label class="form-check-label" for="gym_Want">
                                    Gym
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Want" name="w_generator">
                                <label class="form-check-label" for="generator_Want">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_Want" name="w_sports">
                                <label class="form-check-label" for="sports_Want">
                                    Sports Facilities
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_Want" name="w_wifi">
                                <label class="form-check-label" for="wifi_Want">
                                    Wifi
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_Want" name="w_laundry">
                                <label class="form-check-label" for="laundry_Want">
                                    Laundry
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Want" name="w_lift">
                                <label class="form-check-label" for="lift_Want">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_Want" name="w_fire_exit">
                                <label class="form-check-label" for="Exit_Want">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Want" name="w_parking">
                                <label class="form-check-label" for="parking_Want">
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