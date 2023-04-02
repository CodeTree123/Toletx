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

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_flat_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="room_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="room_name_rented" placeholder="Enter Post Title">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_rented" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_rented" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
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
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_rented" name="per_price">
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
                        <span class="text-danger">@error('price') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
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
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="s_per_charge_rented" name="s_per_price">
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
                        <span class="text-danger">@error('s_charge') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('s_per_price') {{$message}} @enderror</span>
                    </div>


                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_level_rented" class="form-label me-2 fw-bold">Floor Level</label>
                        <input name="floor_level" type="number" class="form-control" id="floor_level_rented" placeholder="Enter Floor Level" value="{{old('floor_level')}}">
                        <span class="text-danger">@error('floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="bedroom_rented" class="form-label me-2 fw-bold">No. of Bedrooms</label>
                        <input name="bedrooms" type="number" class="form-control" id="bedroom_rented" placeholder="Enter Bedrooms" value="{{old('bedrooms')}}">
                        <span class="text-danger">@error('bedrooms') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Drawing_rented" class="form-label me-2 fw-bold">No. of Drawing rooms</label>
                        <input name="drawing" type="number" class="form-control" id="Drawing_rented" placeholder="Enter Drawing rooms" value="{{old('drawing')}}">
                        <span class="text-danger">@error('drawing') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Dining_rented" class="form-label me-2 fw-bold">No. of Dining rooms</label>
                        <input name="dining" type="number" class="form-control" id="Dining_rented" placeholder="Enter Dining rooms" value="{{old('dining')}}">
                        <span class="text-danger">@error('dining') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Kitchen_rented" class="form-label me-2 fw-bold">No. of Kitchen rooms</label>
                        <input name="kitchen" type="number" class="form-control" id="Kitchen_rented" placeholder="Enter Kitchen rooms" value="{{old('kitchen')}}">
                        <span class="text-danger">@error('kitchen') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_varanda_rented" class="form-label me-2 fw-bold">No. of Veranda</label>
                        <input name="varanda" type="number" class="form-control" id="flat_varanda_rented" placeholder="Enter No. of veranda" value="{{old('varanda')}}">
                        <span class="text-danger">@error('varanda') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_attached_toilet_rented" class="form-label me-2 fw-bold">No. of Toilets</label>
                        <input name="attached_toilet" type="number" class="form-control" id="flat_attached_toilet_rented" placeholder="Enter No. of toilets" value="{{old('attached_toilet')}}">
                        <span class="text-danger">@error('attached_toilet') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_size_rented" class="form-label me-2 fw-bold">Flat Size</label>
                        <input name="flat_size" type="text" class="form-control" id="flat_size_rented" placeholder="Enter Flat Size" value="{{old('flat_size')}}">
                        <span class="text-danger">@error('flat_size') {{$message}} @enderror</span>
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
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="electricity_rented" name="electricity" @checked(old('electricity'))>
                            <label class="form-check-label" for="electricity_rented">
                                Electricity
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gas_rented" name="gas" @checked(old('gas'))>
                            <label class="form-check-label" for="gas_rented">
                                Gas
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Water_rented" name="water" @checked(old('water'))>
                            <label class="form-check-label" for="Water_rented">
                                Water
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="furnished_rented" name="furnished" @checked(old('furnished'))>
                            <label class="form-check-label" for="furnished_rented">
                                Furniture
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
                            <input class="form-check-input" type="checkbox" id="cabel_tv_rented" name="cable_tv" @checked(old('cable_tv'))>
                            <label class="form-check-label" for="cabel_tv_rented">
                                Cable Tv
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" @checked(old('generator'))>
                            <label class="form-check-label" for="gen_rented">
                                Generator
                            </label>
                        </div>

                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="wifi_rented" name="wifi" @checked(old('wifi'))>
                            <label class="form-check-label" for="wifi_rented">
                                Wifi
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Exit_rented" name="fire_exit" @checked(old('fire_exit'))>
                            <label class="form-check-label" for="Exit_rented">
                                Fire Exit
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
                            <label for="photo_rented"> Photo 1</label>
                            <input type="file" class="form-control" name="photo" id="photo_rented" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_rented"> Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_rented"> Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_rented"> Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_rented"> Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_rented"> Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_rented">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_rented"> Photo 7</label>
                            <input type="file" class="form-control" name="photo6" id="photo6_rented">
                        </div>

                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="video_rented" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_rented" placeholder="  Youtube Link" value="{{old('video')}}">
                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: {{old('post_type') == 'Want' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_flat_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="room_name_wanted" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" class="form-control" id="room_name_wanted" placeholder="Enter Post Title " value="{{old('w_title')}}">
                        <span class="text-danger">@error('w_title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_wanted" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_wanted" placeholder="Enter " value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
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
                        <span class="text-danger">@error('w_price') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('w_per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
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
                        <span class="text-danger">@error('w_s_charge') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('w_s_per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_level_wanted" class="form-label me-2 fw-bold">Floor Level</label>
                        <input name="w_floor_level" type="number" class="form-control" id="floor_level_wanted" placeholder="Enter Floor Level" value="{{old('w_floor_level')}}">
                        <span class="text-danger">@error('w_floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="bedroom_wanted" class="form-label me-2 fw-bold">No. of Bedrooms</label>
                        <input name="w_bedrooms" type="number" class="form-control" id="bedroom_wanted" placeholder="Enter No. of Bedrooms" value="{{old('w_bedrooms')}}">
                        <span class="text-danger">@error('w_bedrooms') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Drawing_wanted" class="form-label me-2 fw-bold">No. of Drawing rooms</label>
                        <input name="w_drawing" type="number" class="form-control" id="Drawing_wanted" placeholder="Enter Drawing rooms" value="{{old('w_drawing')}}">
                        <span class="text-danger">@error('w_drawing') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Dining_wanted" class="form-label me-2 fw-bold">No. of Dining rooms</label>
                        <input name="w_dining" type="number" class="form-control" id="Dining_wanted" placeholder="Enter Dining rooms" value="{{old('w_dining')}}">
                        <span class="text-danger">@error('w_dining') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_Kitchen_wanted" class="form-label me-2 fw-bold">No. of Kitchen rooms</label>
                        <input name="w_kitchen" type="number" class="form-control" id="flat_Kitchen_wanted" placeholder="Enter Kitchen rooms" value="{{old('w_kitchen')}}">
                        <span class="text-danger">@error('w_kitchen') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_varanda_wanted" class="form-label me-2 fw-bold">No. of Veranda</label>
                        <input name="w_varanda" type="number" class="form-control" id="flat_varanda_wanted" placeholder="Enter No. of veranda" value="{{old('w_varanda')}}">
                        <span class="text-danger">@error('w_varanda') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_attached_toilet_wanted" class="form-label me-2 fw-bold">No. of Toilets</label>
                        <input name="w_attached_toilet" type="number" class="form-control" id="flat_attached_toilet_wanted" placeholder="Enter No. of toilets" value="{{old('w_attached_toilet')}}">
                        <span class="text-danger">@error('w_attached_toilet') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="flat_size_wanted" class="form-label me-2 fw-bold">Flat Size</label>
                        <input name="w_flat_size" type="text" class="form-control" id="flat_size_wanted" placeholder="Enter Flat Size" value="{{old('w_flat_size')}}">
                        <span class="text-danger">@error('w_flat_size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                        <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address')}}">
                        <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2">
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="electricity_wanted" name="w_electricity" @checked(old('w_electricity'))>
                                <label class="form-check-label" for="electricity_wanted">
                                    Electricity
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_wanted" name="w_gas" @checked(old('w_gas'))>
                                <label class="form-check-label" for="gas_wanted">
                                    Gas
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Water_wanted" name="w_water" @checked(old('w_water'))>
                                <label class="form-check-label" for="Water_wanted">
                                    Water
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="furnished_wanted" name="w_furnished" @checked(old('w_furnished'))>
                                <label class="form-check-label" for="furnished_wanted">
                                    Furniture
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
                                <input class="form-check-input" type="checkbox" id="cabel_tv_wanted" name="w_cable_tv" @checked(old('w_cable_tv'))>
                                <label class="form-check-label" for="cabel_tv_wanted">
                                    Cable Tv
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="wifi_wanted" name="w_wifi" @checked(old('w_wifi'))>
                                <label class="form-check-label" for="wifi_wanted">
                                    Wifi
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_wanted" name="w_generator" @checked(old('w_generator'))>
                                <label class="form-check-label" for="gen_wanted">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_wanted" name="w_fire_exit" @checked(old('w_fire_exit'))>
                                <label class="form-check-label" for="Exit_wanted">
                                    Fire Exit
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