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

    <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
        <form method="POST" action="{{ route('post_building_rented') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
            </div>
            <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
            <div class="row">
                <div class="col-12 mb-3 ">
                    <label for="building_name_rented" class="form-label me-2 fw-bold">Post Title</label>
                    <input name="building_name" type="text" class="form-control" id="building_name_rented" placeholder="Enter Post Title" value="{{old('building_name')}}">
                    <span class="text-danger">@error('building_name') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="date_rented" class="form-label me-2 fw-bold">Date</label>
                    <input name="date" type="date" class="form-control" id="date_rented" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                    <span class="text-danger">@error('date') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="phone_rented" class="form-label me-2 fw-bold">Mobile</label>
                    <input name="phone" type="number" class="form-control" id="phone_rented" placeholder="Enter " value="{{$list->phone}}" readonly>
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
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="building_size_rented" class="form-label me-2 fw-bold">Land Area</label>
                    <input name="building_size" type="text" class="form-control" id="building_size_rented" placeholder="Enter Land Area" value="{{old('building_size')}}">
                    <span class="text-danger">@error('building_size') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_rented" class="form-label me-2 fw-bold">Building Type</label>
                    <select id="floor_rented" class="form-select" name="t_build">
                        <option selected hidden>Choose...</option>
                        <option value="rcc" @selected(old('t_build')=="rcc" )>R.C.C</option>
                        <option value="Tin Shed" @selected(old('t_build')=="Tin Shed" )>Tin Shed</option>
                        <option value="Steal Shed" @selected(old('t_build')=="Steal Shed" )>Steal Shed</option>
                        <option value="Brick Building" @selected(old('t_build')=="Brick Building" )>Brick Building</option>
                        <option value="Bamboo Shed" @selected(old('t_build')=="Bamboo Shed" )>Bamboo Shed</option>
                        <option value="Mud Building" @selected(old('t_build')=="Mud Building" )>Mud Building</option>
                    </select>
                    <span class="text-danger">@error('t_build') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_rented" class="form-label me-2 fw-bold">No. of Floors</label>
                    <select id="floor_rented" class="form-select" name="floor">
                        <option selected hidden>Choose...</option>
                        <option value="1" @selected(old('floor')=="1" )>1</option>
                        <option value="2" @selected(old('floor')=="2" )>2</option>
                        <option value="3" @selected(old('floor')=="3" )>3</option>
                        <option value="4" @selected(old('floor')=="4" )>4</option>
                        <option value="5" @selected(old('floor')=="5" )>5</option>
                        <option value="6" @selected(old('floor')=="6" )>6</option>
                        <option value="7" @selected(old('floor')=="7" )>7</option>
                        <option value="8" @selected(old('floor')=="8" )>8</option>
                        <option value="9" @selected(old('floor')=="9" )>9</option>
                        <option value="10" @selected(old('floor')=="10" )>10</option>
                        <option value="11" @selected(old('floor')=="11" )>11</option>
                        <option value="12" @selected(old('floor')=="12" )>12</option>
                        <option value="13" @selected(old('floor')=="13" )>13</option>
                        <option value="14" @selected(old('floor')=="14" )>14</option>
                        <option value="15" @selected(old('floor')=="15" )>15</option>
                        <option value="15+" @selected(old('floor')=="15+" )>15+</option>
                    </select>
                    <span class="text-danger">@error('floor') {{$message}} @enderror</span>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="floor_size_rented" class="form-label me-2 fw-bold">Floor Size</label>
                    <input name="floor_size" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Floor Size" value="{{old('floor_size')}}">
                    <span class="text-danger">@error('floor_size') {{$message}} @enderror</span>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="road_width_rented" class="form-label me-2 fw-bold">Road Width</label>
                    <input name="road_width" type="text" class="form-control" id="road_width_rented" placeholder="Enter Road Width" value="{{old('road_width')}}">
                    <span class="text-danger">@error('road_width') {{$message}} @enderror</span>
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
                        <input class="form-check-input" type="checkbox" id="water_rented" name="water" @checked(old('water'))>
                        <label class="form-check-label" for="water_rented">
                            Water
                        </label>
                    </div>
                    <div class="form-check ms-5 mb-2">
                        <input class="form-check-input" type="checkbox" id="lift_rented" name="lift" @checked(old('lift'))>
                        <label class="form-check-label" for="lift_rented">
                            Lift
                        </label>
                    </div>
                    <div class="form-check ms-5 mb-2">
                        <input class="form-check-input" type="checkbox" id="fire_exit_rented" name="fire_exit" @checked(old('fire_exit'))>
                        <label class="form-check-label" for="fire_exit_rented">
                            Fire Exit
                        </label>
                    </div>
                    <div class="form-check ms-5 mb-2">
                        <input class="form-check-input" type="checkbox" id="gen_rented" name="generator" @checked(old('generator'))>
                        <label class="form-check-label" for="gen_rented">
                            Generator
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
        <form method="POST" action="{{ route('post_building_wanted') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
            </div>
            <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
            <div class="row">
                <div class="col-12 mb-3 ">
                    <label for="building_name_wanted" class="form-label me-2 fw-bold">Post Title</label>
                    <input name="w_building_name" type="text" class="form-control" id="building_name_wanted" placeholder="Enter Post Title" value="{{old('w_building_name')}}">
                    <span class="text-danger">@error('w_building_name') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="date_wanted" class="form-label me-2 fw-bold">Date</label>
                    <input name="w_date" type="date" class="form-control" id="date_wanted" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                    <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="phone_wanted" class="form-label me-2 fw-bold">Mobile</label>
                    <input name="w_phone" type="number" class="form-control" id="phone_wanted" value="{{$list->phone}}" readonly value="{{old('w_phone')}}">
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
                    <p class="text-danger mb-0">@error('w_s_charge') {{$message}} @enderror</p>
                    <p class="text-danger mb-0">@error('w_s_per_price') {{$message}} @enderror</p>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="building_size_wanted" class="form-label me-2 fw-bold">Land Area</label>
                    <input name="w_building_size" type="text" class="form-control" id="building_size_wanted" placeholder="Enter Land Area" value="{{old('w_building_size')}}">
                    <span class="text-danger">@error('w_building_size') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_wanted" class="form-label me-2 fw-bold">Building Type</label>
                    <select id="floor_wanted" class="form-select" name="w_t_build">
                        <option selected hidden>Choose...</option>
                        <option value="rcc" @selected(old('w_t_build')=="rcc" )>R.C.C</option>
                        <option value="Tin Shed" @selected(old('w_t_build')=="Tin Shed" )>Tin Shed</option>
                        <option value="Steal Shed" @selected(old('w_t_build')=="Steal Shed" )>Steal Shed</option>
                        <option value="Brick Building" @selected(old('w_t_build')=="Brick Building" )>Brick Building</option>
                        <option value="Bamboo Shed" @selected(old('w_t_build')=="Bamboo Shed" )>Bamboo Shed</option>
                        <option value="Mud Building" @selected(old('w_t_build')=="Mud Building" )>Mud Building</option>
                    </select>
                    <span class="text-danger">@error('w_t_build') {{$message}} @enderror</span>
                </div>
                <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                    <label for="floor_wanted" class="form-label me-2 fw-bold">No. of Floors</label>
                    <select id="floor_wanted" class="form-select" name="w_floor">
                        <option selected hidden>Choose...</option>
                        <option value="1" @selected(old('w_floor')=="1" )>1</option>
                        <option value="2" @selected(old('w_floor')=="2" )>2</option>
                        <option value="3" @selected(old('w_floor')=="3" )>3</option>
                        <option value="4" @selected(old('w_floor')=="4" )>4</option>
                        <option value="5" @selected(old('w_floor')=="5" )>5</option>
                        <option value="6" @selected(old('w_floor')=="6" )>6</option>
                        <option value="7" @selected(old('w_floor')=="7" )>7</option>
                        <option value="8" @selected(old('w_floor')=="8" )>8</option>
                        <option value="9" @selected(old('w_floor')=="9" )>9</option>
                        <option value="10" @selected(old('w_floor')=="10" )>10</option>
                        <option value="11" @selected(old('w_floor')=="11" )>11</option>
                        <option value="12" @selected(old('w_floor')=="12" )>12</option>
                        <option value="13" @selected(old('w_floor')=="13" )>13</option>
                        <option value="14" @selected(old('w_floor')=="14" )>14</option>
                        <option value="15" @selected(old('w_floor')=="15" )>15</option>
                        <option value="15+" @selected(old('w_floor')=="15+" )>15+</option>
                    </select>
                    <span class="text-danger">@error('w_floor') {{$message}} @enderror</span>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="floor_size_wanted" class="form-label me-2 fw-bold">Floor Size</label>
                    <input name="w_floor_size" type="text" class="form-control" id="floor_size_wanted" placeholder="Enter Floor Size" value="{{old('w_floor_size')}}">
                    <span class="text-danger">@error('w_floor_size') {{$message}} @enderror</span>
                </div>
                <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                    <label for="road_width_wanted" class="form-label me-2 fw-bold">Road Width</label>
                    <input name="w_road_width" type="text" class="form-control" id="road_width_wanted" placeholder="Enter Road Width" value="{{old('w_road_width')}}">
                    <span class="text-danger">@error('w_road_width') {{$message}} @enderror</span>
                </div>
                <div class="col-12 mb-3 ">
                    <label for="address_wanted" class="form-label me-2 fw-bold">Address</label>
                    <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address')}}">
                    <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                </div>
                <div class="col-12 mb-3 ">
                    <label for="description_wanted" class="form-label me-2 fw-bold">Description</label>
                    <textarea name="w_description" type="text" class="form-control" id="description_wanted" rows="3" placeholder="Enter Description">{{old('description')}}</textarea>
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
                            <input class="form-check-input" type="checkbox" id="water_wanted" name="w_water" @checked(old('w_water'))>
                            <label class="form-check-label" for="water_wanted">
                                Water
                            </label>
                        </div>
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_wanted" name="w_lift" @checked(old('w_lift'))>
                            <label class="form-check-label" for="lift_wanted">
                                Lift
                            </label>
                        </div>
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="fire_exit_wanted" name="w_fire_exit" @checked(old('w_fire_exit'))>
                            <label class="form-check-label" for="fire_exit_wanted">
                                Fire Exit
                            </label>
                        </div>
                        <div class="col-2 form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_wanted" name="w_generator" @checked(old('w_generator'))>
                            <label class="form-check-label" for="gen_wanted">
                                Generator
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
@endsection