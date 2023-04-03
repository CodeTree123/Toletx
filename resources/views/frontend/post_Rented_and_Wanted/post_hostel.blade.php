@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2  ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Hostel</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_hostel_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="hostel_post_rented" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="hostel_post_rented" placeholder="Enter Post Title" value="{{old('title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="hostel_name_rented" class="form-label me-2 fw-bold">Hostel Name</label>
                        <input name="hostel_name" type="text" class="form-control" id="hostel_name_rented" placeholder="Enter Hostel Name" value="{{old('hostel_name')}}">
                        <span class="text-danger">@error('hostel_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_rented" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_rented" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="price" type="number" class="form-control" id="price_rented" placeholder="Enter Rent" value="{{old('price')}}">
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
                        <label for="s_charge_rented" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="s_charge" type="number" class="form-control" id="s_charge_rented" placeholder="Enter Service Charge" value="{{old('s_charge')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="s_per_price_rented" name="s_per_price">
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


                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="room_size_rented" class="form-label me-2 fw-bold">Room Size</label>
                        <input name="room_size" type="text" class="form-control" id="room_size_rented" placeholder="Enter Room Size" value="{{old('room_size')}}">
                        <span class="text-danger">@error('room_size') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="room_type_rented" class="form-label me-2 fw-bold">Room Type</label>
                        <select id="room_type_rented" class="form-select" name="room_type">
                            <option selected hidden>Choose number</option>
                            <option value="Single bed" @selected(old('room_type')=="Single bed" )>Single bed</option>
                            <option value="Double bed" @selected(old('room_type')=="Double bed" )>Double bed</option>
                            <option value="Family bed" @selected(old('room_type')=="Family bed" )>Family bed</option>
                            <option value="Couple bed" @selected(old('room_type')=="Couple bed" )>Couple bed</option>
                            <option value="Twin bed" @selected(old('room_type')=="Twin bed" )>Twin bed</option>
                            <option value="Bunk bed" @selected(old('room_type')=="Bunk bed" )>Bunk bed</option>
                            <option value="Honeymoon Suite" @selected(old('room_type')=="Honeymoon Suite" )>Honeymoon Suite</option>
                            <option value="Presidential Suite" @selected(old('room_type')=="Presidential Suite" )>Presidential Suite</option>
                        </select>
                        <span class="text-danger">@error('room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" value="{{old('address')}}">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="furnished_rented" name="furnished" @checked(old('furnished'))>
                            <label class="form-check-label" for="furnished_rented">
                                Furniture
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="attatched_toilet_rented" name="attached_toilet" @checked(old('attached_toilet'))>
                            <label class="form-check-label" for="attatched_toilet_rented">
                                Attached Toilet
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="hot_water_rented" name="hot_water" @checked(old('hot_water'))>
                            <label class="form-check-label" for="hot_water_rented">
                                Geyser
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="ac_rented" name="ac" @checked(old('ac'))>
                            <label class="form-check-label" for="ac_rented">
                                A.C
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="dining_rented" name="dining" @checked(old('dining'))>
                            <label class="form-check-label" for="dining_rented">
                                Dining Facilities
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="pool_rented" name="pool" @checked(old('pool'))>
                            <label class="form-check-label" for="pool_rented">
                                Swimming Pool
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="generator_rented" name="generator" @checked(old('generator'))>
                            <label class="form-check-label" for="generator_rented">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gym_rented" name="gym" @checked(old('gym'))>
                            <label class="form-check-label" for="gym_rented">
                                Gym
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="spa_rented" name="spa" @checked(old('spa'))>
                            <label class="form-check-label" for="spa_rented">
                                Spa
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="sports_rented" name="sports" @checked(old('sports'))>
                            <label class="form-check-label" for="sports_rented">
                                Sports Facilities
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi" @checked(old('wifi'))>
                            <label class="form-check-label" for="wifi_rented">
                                Wifi
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="laundry_rented" name="laundry" @checked(old('laundry'))>
                            <label class="form-check-label" for="laundry_rented">
                                Laundry
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" @checked(old('lift'))>
                            <label class="form-check-label" for="lift_rented">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_rented" name="parking" @checked(old('parking'))>
                            <label class="form-check-label" for="parking_rented">
                                Parking
                            </label>
                        </div>

                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_rented" class="d-block"> Photo 1</label>
                            <input type="file" class="form-control" name="photo" id="photo_rented" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_rented" class="d-block"> Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_rented" class="d-block"> Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_rented" class="d-block"> Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_rented" class="d-block"> Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_rented" class="d-block"> Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_rented" class="d-block"> Photo 7</label>
                            <input type="file" class="form-control" name="photo6" id="photo6_rented">
                        </div>

                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_rented" placeholder="Youtube Link" value="{{old('video')}}">
                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: {{old('post_type') == 'Want' ? 'flex' : 'none'}};">
            <form action="{{route('post_hostel_wanted')}}" method="POST">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="hostel_post_wanted" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" class="form-control" id="hostel_post_wanted" placeholder="Enter Post Title" value="{{old('w_title')}}">
                        <span class="text-danger">@error('w_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="hostel_name_wanted" class="form-label me-2 fw-bold">Hostel Name</label>
                        <input name="w_hostel_name" type="text" class="form-control" id="hostel_name_wanted" placeholder="Enter Hostel Name" value="{{old('w_hostel_name')}}">
                        <span class="text-danger">@error('w_hostel_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_wanted" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_wanted" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_wanted" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="w_price" type="number" class="form-control" id="price_wanted" placeholder="Enter Rent" value="{{old('w_price')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_wanted" name="w_per_price">
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
                        <label for="s_charge_wanted" class="form-label me-2 fw-bold">Service Charge</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="w_s_charge" type="number" class="form-control" id="s_charge_wanted" placeholder="Enter Service Charge" value="{{old('w_s_charge')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="s_per_price_wanted" name="w_s_per_price">
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
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="room_size_wanted" class="form-label me-2 fw-bold">Room Size</label>
                        <input name="w_room_size" type="text" class="form-control" id="room_size_wanted" placeholder="Enter Room Size" value="{{old('w_room_size')}}">
                        <span class="text-danger">@error('w_room_size') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="room_type_wanted" class="form-label me-2 fw-bold">Room Type</label>
                        <select id="room_type_wanted" class="form-select" name="w_room_type">
                            <option selected hidden>Choose number</option>
                            <option value="Single bed" @selected(old('w_room_type')=="Single bed" )>Single bed</option>
                            <option value="Double bed" @selected(old('w_room_type')=="Double bed" )>Double bed</option>
                            <option value="Family bed" @selected(old('w_room_type')=="Family bed" )>Family bed</option>
                            <option value="Couple bed" @selected(old('w_room_type')=="Couple bed" )>Couple bed</option>
                            <option value="Twin bed" @selected(old('w_room_type')=="Twin bed" )>Twin bed</option>
                            <option value="Bunk bed" @selected(old('w_room_type')=="Bunk bed" )>Bunk bed</option>
                            <option value="Honeymoon Suite" @selected(old('w_room_type')=="Honeymoon Suite" )>Honeymoon Suite</option>
                            <option value="Presidential Suite" @selected(old('w_room_type')=="Presidential Suite" )>Presidential Suite</option>
                        </select>
                        <span class="text-danger">@error('w_room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                        <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address')}}">
                        <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{old('w_description')}}</textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2">
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="furnished_wanted" name="w_furnished" @checked(old('w_furnished'))>
                                <label class="form-check-label" for="furnished_wanted">
                                    Furniture
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="attatched_toilet_wanted" name="w_attached_toilet" @checked(old('w_attached_toilet'))>
                                <label class="form-check-label" for="attatched_toilet_wanted">
                                    Attached Toilet
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="hot_water_wanted" name="w_hot_water" @checked(old('w_hot_water'))>
                                <label class="form-check-label" for="hot_water_wanted">
                                    Geyser
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_wanted" name="w_ac" @checked(old('w_ac'))>
                                <label class="form-check-label" for="ac_wanted">
                                    A.C
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="dining_wanted" name="w_dining" @checked(old('w_dining'))>
                                <label class="form-check-label" for="dining_wanted">
                                    Dining Facilities
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="pool_wanted" name="w_pool" @checked(old('w_pool'))>
                                <label class="form-check-label" for="pool_wanted">
                                    Swimming Pool
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_wanted" name="w_generator" @checked(old('w_generator'))>
                                <label class="form-check-label" for="generator_wanted">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gym_wanted" name="w_gym" @checked(old('w_gym'))>
                                <label class="form-check-label" for="gym_wanted">
                                    Gym
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="spa_wanted" name="w_spa" @checked(old('w_spa'))>
                                <label class="form-check-label" for="spa_wanted">
                                    Spa
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_wanted" name="w_sports" @checked(old('w_sports'))>
                                <label class="form-check-label" for="sports_wanted">
                                    Sports Facilities
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_wanted" name="w_wifi" @checked(old('w_wifi'))>
                                <label class="form-check-label" for="wifi_wanted">
                                    Wifi
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="laundry_wanted" name="w_laundry" @checked(old('w_laundry'))>
                                <label class="form-check-label" for="laundry_wanted">
                                    Laundry
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_wanted" name="w_lift" @checked(old('w_lift'))>
                                <label class="form-check-label" for="lift_wanted">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_wanted" name="w_parking" @checked(old('w_parking'))>
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