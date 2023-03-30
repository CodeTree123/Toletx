@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2    ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Exhibition Center</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_exibution_center_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="title_rented" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="title_rented" placeholder="Enter Post Title" value="{{old('title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="c_name_rented" class="form-label me-2 fw-bold">Exhibition Center Name</label>
                        <input name="c_name" type="text" class="form-control" id="c_name_rented" placeholder="Enter Warehouse Name" value="{{old('c_name')}}">
                        <span class="text-danger">@error('c_name') {{$message}} @enderror</span>
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

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="price_rented" class="form-label me-2 fw-bold">Rent Per Day</label>
                        <input name="price" type="number" class="form-control" id="price_rented" placeholder="Enter Price" value="{{old('price')}}">
                        <span class="text-danger">@error('price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="interior_rented" class="form-label me-2 fw-bold">Interior Condition</label>
                        <select id="interior_rented" class="form-select" name="interior_condition">
                            <option selected hidden>Choose Interior Condition</option>
                            <option value="good">good</option>
                            <option value="moderate">moderate</option>
                            <option value="best">best</option>
                        </select>
                        <span class="text-danger">@error('interior_condition') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_rented" class="form-label me-2 fw-bold">Floor Levels</label>
                        <select id="floor_rented" class="form-select" name="floor_level">
                            <option selected hidden>Choose Floor Levels</option>
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
                            <option value="15">15+</option>
                        </select>
                        <span class="text-danger">@error('floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Hall_rented" class="form-label me-2 fw-bold">Exhibition Center Area</label>
                        <input name="room_size" type="text" class="form-control" id="Hall_rented" placeholder="Enter Exhibition Hall Area" value="{{old('room_size')}}">
                        <span class="text-danger">@error('room_size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_size_rented" class="form-label me-2 fw-bold">Exhibition Hall Height</label>
                        <input name="room_type" type="text" class="form-control" id="floor_size_rented" placeholder="Enter Exhibition Hall Height" value="{{old('room_type')}}">
                        <span class="text-danger">@error('room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="road_rented" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" type="text" class="form-control" id="road_rented" placeholder="Enter Road Width" value="{{old('road_width')}}">
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
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Toilet_rented" name="toilet">
                            <label class="form-check-label" for="Toilet_rented">
                                Toilet
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
            <form method="POST" action="{{ route('post_exibution_center_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="title_wanted" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" class="form-control" id="title_wanted" placeholder="Enter Post Title" value="{{old('w_title')}}">
                        <span class="text-danger">@error('w_title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="c_name_wanted" class="form-label me-2 fw-bold">Exhibition Center Name</label>
                        <input name="w_c_name" type="text" class="form-control" id="c_name_wanted" placeholder="Enter Warehouse Name" value="{{old('w_c_name')}}">
                        <span class="text-danger">@error('w_c_name') {{$message}} @enderror</span>
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
                        <label for="price_wanted" class="form-label me-2 fw-bold">Rent Per Day</label>
                        <input name="w_price" type="number" class="form-control" id="price_wanted" placeholder="Enter Price" value="{{old('w_price')}}">
                        <span class="text-danger">@error('w_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="interior_wanted" class="form-label me-2 fw-bold">Interior Condition</label>
                        <select id="interior_wanted" class="form-select" name="w_interior_condition">
                            <option selected hidden>Choose Interior Condition</option>
                            <option value="good">good</option>
                            <option value="moderate">moderate</option>
                            <option value="best">best</option>
                        </select>
                        <span class="text-danger">@error('w_interior_condition') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_wanted" class="form-label me-2 fw-bold">Floor Levels</label>
                        <select id="floor_wanted" class="form-select" name="w_floor_level">
                            <option selected hidden>Choose Floor Levels</option>
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
                            <option value="15">15+</option>
                        </select>
                        <span class="text-danger">@error('w_floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="Hall_wanted" class="form-label me-2 fw-bold">Exhibition Center Area</label>
                        <input name="w_room_size" type="text" class="form-control" id="Hall_wanted" placeholder="Enter Exhibition Hall Area" value="{{old('w_room_size')}}">
                        <span class="text-danger">@error('w_room_size') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_size_wanted" class="form-label me-2 fw-bold">Exhibition Center Height</label>
                        <input name="w_room_type" type="text" class="form-control" id="floor_size_wanted" placeholder="Enter Exhibition Hall Height" value="{{old('w_room_type')}}">
                        <span class="text-danger">@error('w_room_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="road_wanted" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="w_road_width" type="text" class="form-control" id="road_wanted" placeholder="Enter Road Width" value="{{old('w_road_width')}}">
                        <span class="text-danger">@error('w_road_width') {{$message}} @enderror</span>
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
                                <input class="form-check-input" type="checkbox" id="Toilet_wanted" name="w_toilet">
                                <label class="form-check-label" for="Toilet_wanted">
                                    Toilet
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Exit_wanted" name="w_fire_exit">
                                <label class="form-check-label" for="Exit_wanted">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_wanted" name="w_lift">
                                <label class="form-check-label" for="lift_wanted">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_wanted" name="w_generator">
                                <label class="form-check-label" for="gen_wanted">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_wanted" name="w_parking">
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