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

        <div class="col-12" id="Rent" style="display: none;">
            <form method="POST" action="{{ route('post_parking_spot_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type">
                <div class="row">
                    <div class="col-lg-12 co-md-12 col-sm-12 col-12 mb-3 ">
                        <label for="room_name_Rent" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="room_name_Rent" placeholder="Enter Post Title" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_Rent" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                        {{--<select id="phone_Rent" class="form-select" name="phone" required>
                            <option value="">Choose number</option>
                            @foreach($lists as $list)
                            <option value="{{$list->phone}}">{{$list->phone}}</option>
                        @endforeach
                        </select>--}}
                        <input name="phone" type="number" class="form-control" id="phone_Rent" placeholder="Enter " value="{{$list->phone}}" readonly>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Rent" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="price" type="number" class="form-control" id="price_Rent" placeholder="Enter Rent" required>
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" id="per_price_Rent" name="per_price">
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

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="level_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="level_Rent" class="form-select" name="floor_level" required>
                            <option selected hidden>Choose number</option>
                            <option value="Ground">Ground</option>
                            <option value="lavel 1">lavel 1</option>
                            <option value="lavel 2">lavel 2</option>
                        </select>
                    </div>



                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_height_Rent" class="form-label me-2 fw-bold">Floor Hieght</label>
                        <input name="floor_height" type="text" class="form-control" id="floor_height_Rent" placeholder="Enter Floor Height" required>
                    </div>

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="vehicle_type_Rent" class="form-label me-2 fw-bold">Vehicle type</label>
                        <select id="vehicle_type_Rent" class="form-select" name="vehicle_type" required>
                            <option selected hidden>Choose number</option>
                            <option value="Truck">Truck</option>
                            <option value="Motor bike">Motor bike</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Privet car">Privet car</option>
                            <option value="Everything">Everything</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description"></textarea>
                    </div>

                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <label for="photo_Rent" class="d-block"> Photo 1</label>
                        <div class="input-group mb-3 ">

                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                        </div>

                        <label for="photo1_Rent" class="d-block"> Photo 2</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                        </div>

                        <label for="photo2_Rent" class="d-block"> Photo 3</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                        </div>

                        <label for="photo3_Rent" class="d-block"> Photo 4</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                        </div>

                        <label for="photo4_Rent" class="d-block"> Photo 5</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                        </div>

                        <label for="photo5_Rent" class="d-block"> Photo 6</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                        </div>

                        <label for="photo6_Rent" class="d-block"> Photo 7</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="photo6" id="photo6_Rent">
                        </div>

                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_Rent" placeholder="  Youtube Link">
                    </div>


                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: none;">
            <form method="POST" action="{{ route('post_parking_spot_wanted') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}" required autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type">
                <div class="row">
                    <div class="col-lg-12 co-md-12 col-sm-12 col-12 mb-3 ">
                        <label for="room_name_Want" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="room_name_Want" placeholder="Enter Post Title" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_Want" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" required>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                        {{--<select id="phone_Want" class="form-select" name="phone" required>
                            <option value="">Choose number</option>
                            @foreach($lists as $list)
                            <option value="{{$list->phone}}">{{$list->phone}}</option>
                        @endforeach
                        </select>--}}
                        <input name="phone" type="number" class="form-control" id="phone_Want" placeholder="Enter " value="{{$list->phone}}" readonly>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Want" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group mb-3">
                                    <input name="price" type="number" class="form-control" id="price_Want" placeholder="Enter Rent" required>
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group mb-3">
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" id="per_price_Want" name="per_price">
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

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="level_Want" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="level_Want" class="form-select" name="floor_level" required>
                            <option selected hidden>Choose number</option>
                            <option value="Ground">Ground</option>
                            <option value="lavel 1">lavel 1</option>
                            <option value="lavel 2">lavel 2</option>
                        </select>
                    </div>



                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_height_Want" class="form-label me-2 fw-bold">Floor Hieght</label>
                        <input name="floor_height" type="text" class="form-control" id="floor_height_Want" placeholder="Enter Floor Height" required>
                    </div>

                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="vehicle_type_Want" class="form-label me-2 fw-bold">Vehicle type</label>
                        <select id="vehicle_type_Want" class="form-select" name="vehicle_type" required>
                            <option selected hidden>Choose number</option>
                            <option value="Truck">Truck</option>
                            <option value="Motor bike">Motor bike</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Privet car">Privet car</option>
                            <option value="Everything">Everything</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection