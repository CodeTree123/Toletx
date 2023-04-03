@extends('frontend.master.post_master')

@section('content')
<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2  ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Garage</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_parking_spot_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-lg-12 co-md-12 col-sm-12 col-12 mb-3 ">
                        <label for="room_name_Rent" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="room_name_Rent" placeholder="Enter Post Title" value="{{old('title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_Rent" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_Rent" placeholder="Enter " value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
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
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_Rent" name="per_price">
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

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="level_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="level_Rent" class="form-select" name="floor_level">
                            <option selected hidden>Choose number</option>
                            <option value="Ground" @selected(old('floor_level')=="Ground" )>Ground</option>
                            <option value="lavel 1" @selected(old('floor_level')=="lavel 1" )>lavel 1</option>
                            <option value="lavel 2" @selected(old('floor_level')=="lavel 2" )>lavel 2</option>
                        </select>
                        <span class="text-danger">@error('floor_level') {{$message}} @enderror</span>
                    </div>



                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_height_Rent" class="form-label me-2 fw-bold">Floor Height</label>
                        <input name="floor_height" type="text" class="form-control" id="floor_height_Rent" placeholder="Enter Floor Height" value="{{old('floor_height')}}">
                        <span class="text-danger">@error('floor_height') {{$message}} @enderror</span>
                    </div>

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="vehicle_type_Rent" class="form-label me-2 fw-bold">Vehicle type</label>
                        <select id="vehicle_type_Rent" class="form-select" name="vehicle_type">
                            <option selected hidden>Choose number</option>
                            <option value="Truck" @selected(old('vehicle_type')=="Truck" )>Truck</option>
                            <option value="Motor bike" @selected(old('vehicle_type')=="Motor bike" )>Motor bike</option>
                            <option value="Pickup" @selected(old('vehicle_type')=="Pickup" )>Pickup</option>
                            <option value="Privet car" @selected(old('vehicle_type')=="Privet car" )>Privet car</option>
                            <option value="Everything" @selected(old('vehicle_type')=="Everything" )>Everything</option>
                        </select>
                        <span class="text-danger">@error('vehicle_type') {{$message}} @enderror</span>
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

                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_Rent" ></label> Photo 1</label>

                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_Rent" > Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_Rent" > Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_Rent" > Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_Rent" > Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_Rent" > Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_Rent" > Photo 7</label>
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
            <form method="POST" action="{{ route('post_parking_spot_wanted') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-lg-12 co-md-12 col-sm-12 col-12 mb-3 ">
                        <label for="room_name_Want" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" class="form-control" id="room_name_Want" placeholder="Enter Post Title" value="{{old('w_title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_Want" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_Want" placeholder="Enter " value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
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
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_Want" name="w_per_price">
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

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="level_Want" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="level_Want" class="form-select" name="w_floor_level">
                            <option selected hidden>Choose number</option>
                            <option value="Ground" @selected(old('w_floor_level')=="Ground" )>Ground</option>
                            <option value="lavel 1" @selected(old('w_floor_level')=="lavel 1" )>lavel 1</option>
                            <option value="lavel 2" @selected(old('w_floor_level')=="lavel 2" )>lavel 2</option>
                        </select>
                        <span class="text-danger">@error('w_floor_level') {{$message}} @enderror</span>
                    </div>



                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_height_Want" class="form-label me-2 fw-bold">Floor Hieght</label>
                        <input name="w_floor_height" type="text" class="form-control" id="floor_height_Want" placeholder="Enter Floor Height">
                        <span class="text-danger">@error('w_floor_height') {{$message}} @enderror</span>
                    </div>

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="vehicle_type_Want" class="form-label me-2 fw-bold">Vehicle type</label>
                        <select id="vehicle_type_Want" class="form-select" name="w_vehicle_type">
                            <option selected hidden>Choose number</option>
                            <option value="Truck" @selected(old('w_vehicle_type')=="Truck" )>Truck</option>
                            <option value="Motor bike" @selected(old('w_vehicle_type')=="Motor bike" )>Motor bike</option>
                            <option value="Pickup" @selected(old('w_vehicle_type')=="Pickup" )>Pickup</option>
                            <option value="Privet car" @selected(old('w_vehicle_type')=="Privet car" )>Privet car</option>
                            <option value="Everything" @selected(old('w_vehicle_type')=="Everything" )>Everything</option>
                        </select>
                        <span class="text-danger">@error('w_vehicle_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                        <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address`')}}">
                        <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{old('w_description')}}</textarea>
                    </div>
                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection