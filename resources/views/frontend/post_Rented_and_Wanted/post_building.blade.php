@extends('frontend.master.post_master')
@section('content')
<div class="row shadow p-4 rounded mb-5 mt-2  ">
    <div class="col-md-6 col-sm-12">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Building</li>
            </ol>
        </nav>
    </div>
    @include('frontend.include.selector_section')

    <div class="col-12" id="Rent" style="display: none;">
        <form method="POST" action="{{ route('post_building_rented') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
            </div>
            <input class="form-control" type="hidden" id="post_rent" name="post_type">
            <div class="row">
                <div class="col-12 mb-3 ">
                    <label for="building_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                    <input name="building_name" type="text" class="form-control" id="building_name_rented" placeholder="Enter Post Title" required>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                    <input name="date" type="date" class="form-control" id="date_rented" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" required>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                    <input name="phone" type="number" class="form-control" id="phone_rented" placeholder="Enter " value="{{$list->phone}}" readonly>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
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
                <!-- <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="price_rented" class="form-label me-2 fw-bold">Choose Duration</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Choose</option>
                        <option value="hour">Hour</option>
                        <option value="day">Day</option>
                        <option value="only_night">Only Night</option>
                        <option value="week">Week</option>
                        <option value="month">Month</option>
                        <option value="year">Year</option>
                    </select>
                </div> -->
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
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
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="s_per_charge">
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

                <!-- <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="price_rented" class="form-label me-2 fw-bold">Choose Duration</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Choose</option>
                        <option value="hour">Hour</option>
                        <option value="day">Day</option>
                        <option value="only_night">Only Night</option>
                        <option value="week">Week</option>
                        <option value="month">Month</option>
                        <option value="year">Year</option>
                    </select>
                </div> -->
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="building_size_rented" class="form-label me-2 fw-bold">Land Area</label>
                    <input name="building_size" type="text" class="form-control" id="building_size_rented" placeholder="Enter Land Area" required>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_rented" class="form-label me-2 fw-bold">Building Type</label>
                    <select id="floor_rented" class="form-select" name="t_build" required>
                        <option selected hidden>Choose...</option>
                        <option value="rcc">R.C.C</option>
                        <option value="Tin Shed">Tin Shed</option>
                        <option value="Steal Shed">Steal Shed</option>
                        <option value="Brick Building">Brick Building</option>
                        <option value="Bamboo Shed">Bamboo Shed</option>
                        <option value="Mud Building">Mud Building</option>
                    </select>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_rented" class="form-label me-2 fw-bold">No. of Floors</label>
                    <select id="floor_rented" class="form-select" name="floor" required>
                        <option selected hidden>Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="15+">15+</option>
                    </select>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="floor_size_rented" class="form-label me-2 fw-bold">Floor Size</label>
                    <input name="floor_size" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Floor Size" required>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="road_width_rented" class="form-label me-2 fw-bold">Road Width</label>
                    <input name="road_width" type="text" class="form-control" id="road_width_rented" placeholder="Enter Road Width" required>
                </div>
                <div class="col-12 mb-3 ">
                    <label for="address_rented" class="form-label me-2 fw-bold">Address</label>
                    <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                </div>
                <div class="col-12 mb-3 ">
                    <label for="description_rented" class="form-label me-2 fw-bold">Description</label>
                    <textarea name="description" type="text" class="form-control" id="description_rented" rows="3" placeholder="Enter Description"></textarea>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
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
                        <input class="form-check-input" type="checkbox" id="water_rented" name="water">
                        <label class="form-check-label" for="water_rented">
                            Water
                        </label>
                    </div>
                    <div class="form-check ms-5 mb-2">
                        <input class="form-check-input" type="checkbox" id="lift_rented" name="lift">
                        <label class="form-check-label" for="lift_rented">
                            Lift
                        </label>
                    </div>
                    <div class="form-check ms-5 mb-2">
                        <input class="form-check-input" type="checkbox" id="fire_exit_rented" name="fire_exit">
                        <label class="form-check-label" for="fire_exit_rented">
                            Fire Exit
                        </label>
                    </div>
                    <div class="form-check ms-5 mb-2">
                        <input class="form-check-input" type="checkbox" id="gen_rented" name="generator">
                        <label class="form-check-label" for="gen_rented">
                            Generator
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
        <form method="POST" action="{{ route('post_building_wanted') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
            </div>
            <input class="form-control" type="hidden" id="post_want" name="post_type">
            <div class="row">
                <div class="col-12 mb-3 ">
                    <label for="building_name_wanted" class="form-label me-2 fw-bold">Post Title</label>
                    <input name="building_name" type="text" class="form-control" id="building_name_wanted" placeholder="Enter Post Title" required>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                    <input name="date" type="date" class="form-control" id="date_wanted" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" required>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                    <input name="phone" type="number" class="form-control" id="phone_wanted" value="{{$list->phone}}" readonly <input name="price" type="number" class="form-control" id="price_wanted" placeholder="Enter Rent" required>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
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
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
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
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="s_per_charge">
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
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="building_size_wanted" class="form-label me-2 fw-bold">Land Area</label>
                    <input name="building_size" type="text" class="form-control" id="building_size_wanted" placeholder="Enter Land Area" required>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_wanted" class="form-label me-2 fw-bold">Building Type</label>
                    <select id="floor_wanted" class="form-select" name="t_build" required>
                        <option selected hidden>Choose...</option>
                        <option value="rcc">R.C.C</option>
                        <option value="Tin Shed">Tin Shed</option>
                        <option value="Steal Shed">Steal Shed</option>
                        <option value="Brick Building">Brick Building</option>
                        <option value="Bamboo Shed">Bamboo Shed</option>
                        <option value="Mud Building">Mud Building</option>
                    </select>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_wanted" class="form-label me-2 fw-bold">No. of Floors</label>
                    <select id="floor_wanted" class="form-select" name="floor" required>
                        <option selected hidden>Choose...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="15+">15+</option>
                    </select>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="floor_size_wanted" class="form-label me-2 fw-bold">Floor Size</label>
                    <input name="floor_size" type="text" class="form-control" id="floor_size_wanted" placeholder="Enter Floor Size" required>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="road_width_wanted" class="form-label me-2 fw-bold">Road Width</label>
                    <input name="road_width" type="text" class="form-control" id="road_width_wanted" placeholder="Enter Road Width" required>
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
                    <h2 class="fw-bold mb-3">Amenities</h2>
                    <div class="row ms-5 ">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="electricity_wanted" name="electricity">
                            <label class="form-check-label" for="electricity_wanted">
                                Electricity
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="gas_wanted" name="gas">
                            <label class="form-check-label" for="gas_wanted">
                                Gas
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="water_wanted" name="water">
                            <label class="form-check-label" for="water_wanted">
                                Water
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_wanted" name="lift">
                            <label class="form-check-label" for="lift_wanted">
                                Lift
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="fire_exit_wanted" name="fire_exit">
                            <label class="form-check-label" for="fire_exit_wanted">
                                Fire Exit
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_wanted" name="generator">
                            <label class="form-check-label" for="gen_wanted">
                                Generator
                            </label>
                        </div>
                        <div class="form-check mb-2">
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
@endsection